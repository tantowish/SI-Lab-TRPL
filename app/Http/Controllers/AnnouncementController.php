<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\labAdministrator;

class AnnouncementController extends Controller
{
    public function show(){
    $announcements = Announcement::latest()->paginate(5);
        $header = "Pengumuman";
        // return view("dashboard.announcement.show", [
        //     "announcements"=> $announcements,
        //     "header"=>"Pengumuman"
        // ]);
        return view("dashboard.announcement.show",compact("announcements","header"));
    }
    

    public function index(){
        $labAdminId = session('data')['lab_admin_id'];
        $labAdministrator = labAdministrator::with('announcement')->find($labAdminId);
        
        $announcements = $labAdministrator->announcement()->latest()->paginate(5); 
        
        return view("dashboard.announcement.index", [
            "header" => "Pengumuman", 
            "announcements" => $announcements,
            "no"=>1
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
        return redirect()->route('announcement.index')->with('success', 'Berhasil menambahkan pengumuman');
    }
}
