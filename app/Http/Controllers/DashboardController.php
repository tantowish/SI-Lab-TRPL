<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\lectureSchedule;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $announcements = Announcement::orderBy('created_at', 'desc')->take(2)->get();
        $matchingSchedules = LectureSchedule::whereDate('start_time', now()->toDateString())->get();
        return view("dashboard.index", [
            "announcements"=> $announcements,
            "header"=>"Pengumuman",
            "schedules"=> $matchingSchedules,      
        ]);
    }
}
