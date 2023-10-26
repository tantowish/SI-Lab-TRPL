<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $announcements = Announcement::orderBy('created_at', 'desc')->take(2)->get();
        return view("dashboard.index", [
            "announcements"=> $announcements,
            "header"=>"Pengumuman"
        ]);
    }
}
