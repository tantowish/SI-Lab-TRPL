<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'header'=>'Reservasi'
        ]);
    }

    // User Laboran
    public function index(){
        return view('dashboard.reserve.index',[
            'header'=>'Persetujuan Peminjaman Ruangan'
        ]);
    }
}
