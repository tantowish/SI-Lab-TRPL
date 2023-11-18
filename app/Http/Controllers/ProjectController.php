<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Project;
use App\Models\ProjectField;
use Illuminate\Http\Request;
use App\Models\ProjectHistory;

class ProjectController extends Controller
{
    // User doma
    public function index(){
        if(session('data')->getTable()=='lab_administrators'){
            $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        }
        else{
            $projectHistories = ProjectHistory::where('user_id', session('data')['user_id'])->get();
            $projectIds = $projectHistories->pluck('project_id');

            $projects = Project::whereIn('project_id', $projectIds)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        }
        return view("dashboard.project.index",[
            'header'=>'Riwayat Proyek',
            'projects'=> $projects,
            'no'=>1,
        ]);
    }

    public function create(){
        $fields = Field::all();
        return view('dashboard.project.create', [
            'header'=> 'Pengajuan Proyek',
            'fields' => $fields
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'title'=>"required",
            'start_date'=>'required|date_format:d-m-Y',
            'end_date'=>'date_format:d-m-Y|nullable|after:start_date',
            'document'=>'required',
            'description'=>'required',
            'pilih'=>'required'
        ]);
        $store = [
            'project_name' => $validated['title'],
            'start_date' => date('Y-m-d', strtotime($validated['start_date'])),
            'end_date' => $validated['end_date'] ? date('Y-m-d', strtotime($validated['end_date'])) : null,
            'description' => $validated['description'],
            'document_link' => $validated['document'],
        ];
        $project = Project::create($store);
        
        foreach ($validated['pilih'] as $id) {
            ProjectField::create([
                'field_id'=>$id,
                'project_id'=>$project->project_id
            ]);
        }
        
        ProjectHistory::create([
            'user_id'=>session('data')['user_id'],
            'project_id'=>$project->project_id
        ]);
        
        return redirect()->route('project.index')->with('success','Proyek berhasil masuk permohonan');
    }

    public function show($id){
        $project = Project::find($id);
        // $user = User::findOrFail($project->projectHistory[0]->user_id);
        return view('dashboard.project.show',[
            'header'=> $project->project_name,
            'project'=> $project,
            // 'pemohon'=> $user->user_name
        ]);
    }   

    // Laboran
    public function edit($id){
        $project = Project::find($id);
        $fields = Field::all();
        return view('dashboard.project.edit',[
            'header'=>'Persetujuan Pengajuan Proyek',
            'project'=> $project,
            'fields'=> $fields
        ]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'title'=>"required",
            'start_date'=>'required|date_format:d-m-Y',
            'end_date'=>'date_format:d-m-Y|nullable|after:start_date',
            'document'=>'required',
            'description'=>'required',
            'pilih'=>'required'
        ]);
        $store = [
            'project_name' => $validated['title'],
            'start_date' => date('Y-m-d', strtotime($validated['start_date'])),
            'end_date' => $validated['end_date'] ? date('Y-m-d', strtotime($validated['end_date'])) : null,
            'description' => $validated['description'],
            'document_link' => $validated['document'],
        ];
        // Delete existing ProjectField records for the project
        $project = Project::findOrFail($id);
        ProjectField::where('project_id', $project->project_id)->delete();

        // Create new ProjectField records based on the updated selections
        foreach ($validated['pilih'] as $id) {
            ProjectField::create([
                'field_id' => $id,
                'project_id' => $project->project_id,
            ]);
        }
        $project->update($store);
        return redirect()->route('project.index')->with('success','Berhasil mengedit proyek');
    }

    public function destroy($id){
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('project.index')->with('success','Berhasil menghapus proyek');
    }

    public function publish($id){
        $project = Project::findOrFail($id);
        $project->status = 'published';
        $project->save();
        return redirect()->route('project.show', $id)->with('success','Berhasil mempublikasi proyek');
    }

    public function reject($id){
        $project = Project::findOrFail($id);
        $project->status = 'rejected';
        $project->save();
        return redirect()->route('project.show', $id)->with('success','Berhasil reject proyek');

    }
    
    public function archive($id){
        $project = Project::findOrFail($id);
        $project->status = 'archive';
        $project->save();
        return redirect()->route('project.show', $id)->with('success','Berhasil mengarsipkan proyek');
    }
}