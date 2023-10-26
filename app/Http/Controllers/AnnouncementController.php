<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function show(){
        $announcements = Announcement::orderBy('created_at', 'desc')->paginate(5);
        return view("dashboard.announcement.show", [
            "announcements"=> $announcements,
            "header"=>"Pengumuman"
        ]);
    }

    public function index(){
        return view("dashboard.announcement.index", [
            "header"=>"Pengumuman"
        ]);
    }

    public function create(){
        return view("dashboard.announcement.create", [
            "header"=>"Pengumuman",
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            "title"=> "required",
            "description"=>'required'
        ]);
        $validated["lab_admin_id"] = session('data')['lab_admin_id'];
        Announcement::create($validated);
        return redirect()->route('pengumuman.index')->with('success', 'Berhasil menambahkan pengumuman');
    }
}
