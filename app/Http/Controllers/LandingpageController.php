<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use App\Models\LabAdministrator;

class LandingpageController extends Controller
{
    public function index()
    {
        $laboratorium = Laboratorium::all();
        return view('page.index',[
            'laboratorium'=>$laboratorium,
            'labCount'=>$laboratorium->count(),
            'projectCount' => Project::where('status', 'published')->count(),
            'laboranCount' => LabAdministrator::count(),
            'mahasiswaCount' => User::where('role', 'mahasiswa')->count(),
            'dosenCount' => User::where('role', 'dosen')->count(),
        ]);
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
    public function indexProject(Request $request)
    {
        $query = Project::where('status', 'published');
        $search = null;
        // Check if there is a search query
        $searchQuery = $request['search'];
        if ($searchQuery) {
            // Perform search using project_name and project_description
            $query->where(function ($innerQuery) use ($searchQuery) {
                $innerQuery->where('project_name', 'like', "%$searchQuery%")
                    ->orWhere('description', 'like', "%$searchQuery%");
            });
            $search = $searchQuery;
        }
    
        $posts = $query->paginate(10);
        return view('page.publication.index', [
            'posts' => $posts,
            'search'=>$search
        ]);
    }
    
    
    public function showProject($id)
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
    public function showLaboratorium($id)
    {
        $laboratorium = Laboratorium::findOrFail($id);
        return view('page.laboratorium.show',[
            'laboratorium'=>$laboratorium
        ]);
    }
    public function indexMembership()
    {
        $labAdmin = LabAdministrator::all();
        return view('page.membership.index', [
            'labAdmins' => $labAdmin
        ]);
    }
    public function showMembership($id)
    {
        $labAdmin = LabAdministrator::findOrFail($id);
        return view('page.membership.show',[
            'labAdmin'=>$labAdmin
        ]);

    }
}
