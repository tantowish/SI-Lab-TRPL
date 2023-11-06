<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Subject;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use App\Models\lectureSchedule;

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
    public function create()
    {
        $subjects = Subject::all();
        $laboratorium = Laboratorium::all();
        return view('dashboard.schedule.create',[
            'header'=>"Tambah Jadwal",
            'subjects'=> $subjects,
            'laboratorium'=> $laboratorium
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
            'id'=> $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function dateShow($date){
        $now = Carbon::parse($date); // Parse the string into a Carbon date object
        $startDate = $now->toDateString(); // Extract the date part of $now
    
        $schedules = LectureSchedule::whereDate('start_time', $startDate)->get();
    
        return view("dashboard.schedule.index", [
            "schedules" => $schedules,
            "header" => "jadwal, " . $now->isoFormat('D MMMM Y'),
            'date' => $now
        ]);
    }
    
}
