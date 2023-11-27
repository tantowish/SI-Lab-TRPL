<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class AssistantController extends Controller
{
    public function index(){
        return view('dashboard.assistant.index',[
            'header'=>'Data Asisten'
        ]);
    }

    public function create(){
        return view('dashboard.assistant.create',[
            'header'=>'Tambah Asisten',
            'subjects'=>Subject::all()
        ]);
    }
}
