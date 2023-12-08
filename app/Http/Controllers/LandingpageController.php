<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use App\Models\labAdministrator;
use Database\Seeders\ProjectSeeder;

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
    public function indexProject()
    {
        $posts = Project::where('status','published')->paginate(10);
        return view('page.publication.index',[
            'posts'=>$posts
        ]);
    }
    public function showPrpject($id)
    {
        $project = Project::findOrFail($id);
        return view('page.publication.show',[
           'project'=>$project
        ]);
    }
    public function indexLaboratorium()
    {
        return view('page.laboratorium.index',[
            'laboratorium'=>Laboratorium::all()
        ]);
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
