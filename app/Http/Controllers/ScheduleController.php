<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Subject;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use App\Models\lectureSchedule;
use Illuminate\Console\Scheduling\Schedule;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $now = Carbon::now();
        // $threeDaysAgo = $now->copy()->subDays(3);
        // $threeDaysFromNow = $now->copy()->addDays(3);

        // $schedules = LectureSchedule::whereBetween('start_time',$now)
        //     ->get();

        $now = Carbon::now();
        $startDate = $now->toDateString(); // Extract the date part of $now

        $schedules = LectureSchedule::whereDate('start_time', $startDate)->get();

        return view("dashboard.schedule.index", [
            "schedules"=> $schedules,
            "header"=>"jadwal, ". Carbon::now()->isoFormat('D MMMM Y'),
            'date'=>$now,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($date)
    {
        $now = Carbon::parse($date);
        $startDate = $now->toDateString();
        $schedules = LectureSchedule::whereDate('start_time', $startDate)->get();
        $subjects = Subject::all();
        $laboratorium = Laboratorium::all();
        return view('dashboard.schedule.create',[
            'header'=>"Tambah Jadwal",
            'subjects'=> $subjects,
            'laboratorium'=> $laboratorium,
            'schedules'=>$schedules,
            'date'=>$now
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'lab'=>'required',
            'start_time'=>'required|date_format:H:i',
            'end_time'=>'required|date_format:H:i',
            'subject'=>'required',
            'information'=>'nullable'
        ]);

        if($validated['subject']=="null"){
            $validated['subject']=null;
        }   
        
        $store = [
            'laboratorium_id'=>$validated['lab'],
            'start_time'=> $request['date']." ".$validated['start_time'].":00",
            'end_time'=> $request['date']." ".$validated['end_time'].":00",
            'subject_id'=> $validated['subject'],
            'information'=>$validated['information']
        ];


        $store['lab_admin_id']=session('data')['lab_admin_id'];

        // dd($date);
        lectureSchedule::create($store);


        return redirect()->route('schedule.date.show', $request['date'])->with('success','Berhasil menambahkan jadwal');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $lectureSchedule = LectureSchedule::findOrFail($id);
        return view('dashboard.schedule.show', [
            'header'=>$lectureSchedule->laboratorium->laboratorium_name,
            'schedule'=> $lectureSchedule,
            'route'=>'schedule.date.show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $schedule = LectureSchedule::findOrFail($id);
        $subjects = Subject::all();
        $laboratorium = Laboratorium::all();
        return view('dashboard.schedule.edit', [
            "schedule"=> $schedule,
            "header"=>"Edit Jadwal",
            'subjects'=> $subjects,
            'laboratorium'=> $laboratorium,
            'id'=> $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'lab' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'subject' => 'required',
            'information' => 'nullable'
        ]);
        
        if ($validated['subject'] === "null") {
            $validated['subject'] = null;
        }
    
        $store = [
            'laboratorium_id' => $validated['lab'],
            'start_time' => Carbon::createFromFormat('d-m-Y', $validated['date'])->format('Y-m-d') . " " . $validated['start_time'] . ":00",
            'end_time' => Carbon::createFromFormat('d-m-Y', $validated['date'])->format('Y-m-d') . " " . $validated['end_time'] . ":00",
            'subject_id' => $validated['subject'],
            'information' => $validated['information']
        ];
    
        $date = Carbon::parse(Carbon::createFromFormat('d-m-Y', $validated['date'])->format('Y-m-d'));
        $startDate = $date->toDateString();
        $schedules = LectureSchedule::whereDate('start_time', $startDate)->get();
    
        $existingSchedule = LectureSchedule::findOrFail($id);
    
        // dd($schedules);
        foreach ($schedules as $schedule) {
            if ($schedule->schedule_id != $id) {
                $scheduleStartTime = $schedule->start_time;
                $scheduleEndTime = $schedule->end_time;
    
                // Convert the $store start_time and end_time to Carbon objects
                $storeStartTime = Carbon::createFromFormat('Y-m-d H:i:s', $store['start_time']);
                $storeEndTime = Carbon::createFromFormat('Y-m-d H:i:s', $store['end_time']);
    
                // Check if the $store time range overlaps with the schedule's time range
                if (
                    $storeEndTime > $scheduleStartTime &&
                    $storeStartTime < $scheduleEndTime &&
                    $schedule->laboratorium_id === $store['laboratorium_id']
                ) {
                    return back()
                    ->withInput()
                    ->with([
                        'error' => 'Jadwal sudah ada',
                        'keterangan' => $store['information']
                    ]);
                }
            }
        }
    
        // If there are no overlaps, update the schedule and add a success message.
        $existingSchedule->update($store);
        return redirect()->route('schedule.show', $id)->with('success', 'Jadwal telah di update');
    }
    

    public function dateShow($date){
        $now = Carbon::parse($date);
        $startDate = $now->toDateString();
    
        $schedules = LectureSchedule::whereDate('start_time', $startDate)->get();
    
        return view("dashboard.schedule.index", [
            "schedules" => $schedules,
            "header" => "jadwal, " . $now->isoFormat('D MMMM Y'),
            'date' => $now
        ]);
    }
    
}
