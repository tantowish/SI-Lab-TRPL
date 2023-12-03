<?php

namespace App\Http\Controllers;

use App\Models\LabReserve;
use Carbon\Carbon;
use App\Models\Reserve;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use App\Models\LectureSchedule;

class ReserveController extends Controller
{

    // User Doma
    public function history(){
        $reserves = Reserve::where('user_id', session('data')['user_id'])
        ->orderBy('created_at', 'desc') // Order by created_at in ascending order
        ->paginate(5);
        // dd($reserves);
        return view("dashboard.reserve.index",[
            'header'=>'Riwayat Peminjaman',
            'reserves'=> $reserves
        ]);
    }

    public function create(){
        return view('dashboard.reserve.create',[
            'header'=>'Reservasi',
            'date'=>null
        ]);
    }

    public function createDate($date)
    {
        $now = Carbon::parse($date);
    
        if ($now->isSameDay(Carbon::today()) || $now->lessThan(Carbon::today())) {
            return back()->with('error','Tanggal tidak valid, tolong reservasi maksimal h-1 hari');
        }
    
        $startDate = $now->toDateString();
    
        $schedules = LectureSchedule::whereDate('start_time', $startDate)->get();
        
        return view('dashboard.reserve.create', [
            'header' => 'Reservasi',
            'schedules' => $schedules,
            'date' => $date,
            'route' => 'reserve.create.date',
            'laboratorium' => Laboratorium::all()
        ]);
    }
    

    public function store(Request $request){
        $validated = $request->validate([
            'lab'=>'required',
            'start_time'=>'required|date_format:H:i',
            'end_time'=>'required|date_format:H:i',
            'file'=>'required|max:10240', 
        ]);

        $validatedData['file'] = $request->file('file')->store('file/permohonan');
        
        $store = [
            'laboratorium_id'=>$validated['lab'],
            'start_time'=> $request['date']." ".$validated['start_time'].":00",
            'end_time'=> $request['date']." ".$validated['end_time'].":00",
            'user_id'=> session('data')['user_id'],
            'file'=>$validatedData['file']
        ];

        $reserve = Reserve::create($store);
        LabReserve::create([
            'reserve_id'=> $reserve->reserve_id,
            'lab_admin_id'=> null,
        ]);

        return redirect()->route('reserve.history')->with('success','Berhasil membuat permohonan');
    }

    // User Laboran
    public function index(){
        $reserves = Reserve::orderBy('created_at', 'desc')->paginate(7);
        return view('dashboard.reserve.index',[
            'header'=>'Persetujuan Peminjaman Ruangan',
            'reserves'=> $reserves
        ]);
    }

    public function show($id){
        $reserve = Reserve::findOrFail($id);
        $datetime = Carbon::parse($reserve->start_time)->isoFormat('dddd, D MMMM Y');
        return view('dashboard.reserve.show',[
            'reserve'=>$reserve,
            'header'=>'Persetujuan Peminjaman Ruangan '.$reserve->laboratorium->laboratorium_name,
            'datetime'=>$datetime
        ]);
    }

    public function doc(Reserve $reserve){
        return response()->file(public_path('storage/'.$reserve->file),['content-type'=>'application/pdf']);
    }

    public function reject($reserve){
        $reserve = Reserve::findOrFail($reserve);
        $labReserve = $reserve->labReserve->first();
        if($labReserve->status = 'accepted'){
            return redirect()->route('reserve.show', $reserve->reserve_id)->with('error', 'Sudah di accept tidak bisa di reject');
        }
        $labReserve->status = 'rejected';
        $labReserve->lab_admin_id = session('data')['lab_admin_id'];
        $labReserve->save();
        return redirect()->route('reserve.index')->with('success','Reservasi berhasil di Reject');
    }
    
    public function accept($reserveId){
        $reserve = Reserve::findOrFail($reserveId);

           // Check if reservation start time is before current time
        $now = now();
        $carbonStartDate = Carbon::parse($reserve->start_time);

        if ($carbonStartDate->isBefore($now)) {
            // Handle case where reservation start time has already passed
            return redirect()->route('reserve.show', $reserve->reserve_id)
                ->with('error', 'Reservasi tidak dapat diterima karena waktu sudah lewat');
        }

        $carbonDate = Carbon::parse($reserve->start_time);
        $formattedDate = $carbonDate->format('Y-m-d');
        
        // Get schedules for the specified date
        $schedules = LectureSchedule::whereDate('start_time', $formattedDate)->get();
    
        // Check if any schedule conflicts with the reservation time
        $conflict = false;
    
        foreach ($schedules as $schedule) {
            if ($schedule->laboratorium_id == $reserve->laboratorium_id) {
                $scheduleStartTime = Carbon::parse($schedule->start_time);
                $scheduleEndTime = Carbon::parse($schedule->end_time);
        
                // Check for overlap
                if (
                    $carbonDate->between($scheduleStartTime, $scheduleEndTime) ||
                    $reserve->end_time->between($scheduleStartTime, $scheduleEndTime) ||
                    $carbonDate->lte($scheduleStartTime) && $reserve->end_time->gte($scheduleEndTime)
                ) {
                    $conflict = true;
                    break; // No need to check further, conflict found
                }
            }
        }
    
        if ($conflict) {
            // Handle conflict, e.g., show an error message
            return redirect()->route('reserve.show', $reserve->reserve_id)->with('error', 'Jadwal sudah terpakai');
        }
    
        // If no conflict, update the labReserve status
        $labReserve = $reserve->labReserve->first();
        $labReserve->status = 'accepted';
        $labReserve->lab_admin_id = session('data')['lab_admin_id'];
        $labReserve->save();

        lectureSchedule::create([
            'laboratorium_id'=>$reserve->laboratorium_id,
            'start_time'=>$reserve->start_time,
            'end_time'=>$reserve->end_time,
            'lab_admin_id' => $labReserve->lab_admin_id,
            'information'=>"Reservasi"
        ]);
    
        return redirect()->route('reserve.index')->with('success', 'Reservasi berhasil di Accept');
    }
}
