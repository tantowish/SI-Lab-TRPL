<?php

namespace App\Http\Controllers;

use App\Models\labAdministrator;
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
    public function category()
    {
        return view('page.publication.category');
    }
    public function publication()
    {
        return view('page.publication.publication');
    }
    public function indexPublication()
    {
        return view('page.publication.index');
    }
    public function showPublication()
    {
        return view('page.publication.show');
    }
    public function indexLaboratorium()
    {
        return view('page.laaboratorium.index');
    }
    public function showLaboratorium()
    {
        return view('page.laboratorium.show');
    }
    public function indexMembership()
    {
        $labAdmin = labAdministrator::all();
        return view('page.membership.index', [
            'labAdmins' => $labAdmin
        ]);
    }
    public function showMembership($id)
    {
        $labAdmin = labAdministrator::findOrFail($id);
        return view('page.membership.show',[
            'labAdmin'=>$labAdmin
        ]);

    }
}
