<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $announcements = Announcement::all();
        return view("dashboard.index", compact('announcements'));
    }
}
