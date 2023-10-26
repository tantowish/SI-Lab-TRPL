<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\labAdministrator;

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
        $labAdminId = session('data')['lab_admin_id'];
        $labAdministrator = labAdministrator::with('announcement')->find($labAdminId);
        
        $announcements = $labAdministrator->announcement()
            ->orderBy('created_at', 'desc') // Order by created_at in descending order
            ->paginate(5); // Apply pagination after ordering
        
        return view("dashboard.announcement.index", [
            "header" => "Pengumuman", 
            "announcements" => $announcements
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
