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
        $reserves = Reserve::where('user_id', session('data')['user_id'])->paginate(5);
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
        $reserves = Reserve::paginate(5);
        return view('dashboard.reserve.index',[
            'header'=>'Persetujuan Peminjaman Ruangan',
            'reserves'=> $reserves
        ]);
    }

    public function show($id){
        $reserve = Reserve::findOrFail($id);
        $date = Carbon::parse($reserve->start_time)->isoFormat('dddd, D MMMM Y');
        return view('dashboard.reserve.show',[
            'reserve'=>$reserve,
            'header'=>'Persetujuan Peminjaman Ruangan '.$reserve->laboratorium->laboratorium_name,
            'date'=>$date
        ]);
    }

    public function doc(Reserve $reserve){
        return response()->file(public_path('storage/'.$reserve->file),['content-type'=>'application/pdf']);
    }

    
}
