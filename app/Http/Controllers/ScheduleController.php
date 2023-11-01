<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\lectureSchedule;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $now = Carbon::now();
        $threeDaysAgo = $now->copy()->subDays(3);
        $threeDaysFromNow = $now->copy()->addDays(3);

        $schedules = LectureSchedule::whereBetween('start_time', [$threeDaysAgo->toDateString(), $threeDaysFromNow->toDateString()])
            ->get();


        return view("dashboard.schedule.index", [
            "schedules"=> $schedules,
            "header"=>"jadwal, ". Carbon::now()->isoFormat('D MMMM Y'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            'schedule'=> $lectureSchedule
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LectureSchedule $lectureSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LectureSchedule $lectureSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LectureSchedule $lectureSchedule)
    {
        //
    }
}
