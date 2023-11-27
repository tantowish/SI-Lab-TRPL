<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }
    public function about()
    {
        return view('page.about');
    }
    public function datasoftware()
    {
        return view('page.datasoftware');
    }
    public function publication1()
    {
        return view('page.publication1');
    }
    public function publication2()
    {
        return view('page.publication2');
    }
    public function publication3()
    {
        return view('page.publication3');
    }
    public function publication4()
    {
        return view('page.publication4');
    }
    public function laboratorium1()
    {
        return view('page.laboratorium1');
    }
    public function laboratorium2()
    {
        return view('page.laboratorium2');
    }
    public function membership1()
    {
        return view('page.membership1');
    }
    public function membership2()
    {
        return view('page.membership2');
    }
}
