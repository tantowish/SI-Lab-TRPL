<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use App\Models\LectureSchedule;

class ReserveController extends Controller
{

    // User Doma
    public function history(){
        return view("dashboard.reserve.index",[
            'header'=>'Riwayat Peminjaman'
        ]);
    }

    public function create(){
        return view('dashboard.reserve.create',[
            'header'=>'Reservasi',
            'date'=>null
        ]);
    }

    public function createDate($date){
        $now = Carbon::parse($date); // Parse the string into a Carbon date object
        $startDate = $now->toDateString(); // Extract the date part of $now
    
        $schedules = LectureSchedule::whereDate('start_time', $startDate)->get();
        return view('dashboard.reserve.create',[
            'header'=>'Reservasi',
            'schedules'=>$schedules,
            'date'=> $date,
            'route'=>'reserve.create.date',
            'laboratorium'=>Laboratorium::all()
        ]);
    }

    // User Laboran
    public function index(){
        return view('dashboard.reserve.index',[
            'header'=>'Persetujuan Peminjaman Ruangan'
        ]);
    }
}
