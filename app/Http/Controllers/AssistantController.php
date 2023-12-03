<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use App\Models\Attendance;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use App\Models\AssistantLecturer;

class AssistantController extends Controller
{
    public function index(){
        $assistants = AssistantLecturer::select('assistant_lecturers.*')
        ->join('users', 'assistant_lecturers.user_id', '=', 'users.user_id')
        ->whereIn('assistant_lecturers.assistant_id', function($query) {
            $query->selectRaw('MAX(assistant_id) as assistant_id')
                  ->from('assistant_lecturers')
                  ->groupBy('user_id');
        })
        ->where(function ($query) {
            // Add your custom filtering logic here based on the request parameters
            if (request()->has('search')) {
                $query->where('users.name', 'like', '%' . request('search') . '%');
            }
        })
        ->latest('assistant_lecturers.updated_at')
        ->paginate(7)
        ->withQueryString();
    
    
    
    
        $latestAssistant = AssistantLecturer::latest()->first();
    
        return view('dashboard.assistant.index',[
            'header' => 'Data Asisten',
            'assistants' => $assistants,
            'latest' => $latestAssistant->updated_at
        ]);
    }

    // Laboran
    public function create(){
        return view('dashboard.assistant.create',[
            'header'=>'Tambah Asisten',
            'subjects'=>Subject::all()
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'interest'=>'nullable',
            'subject' => 'required'
        ]);

        if($validated['subject']=='pick'){
            return back()->with([
                'error' => 'Pilih subject',
                'oldValue' => $validated
            ]);
        }
    
        // dd($validated);
        $user = User::where('username', $validated['username'])->first();
    
        if (!$user) {
            return back()->with('error', 'Username tidak ditemukan');
        }
        
        $subject = Subject::findOrFail($validated['subject']);
        if ($subject->assistant->count()>2) {
            return back()->with('error', 'Mata kuliah sudah memiliki 2 asisten');
        }
    
        $assistantLecturers = AssistantLecturer::where('user_id', $user->user_id)->get();
        // dd($assistantLecturers);
    
        foreach ($assistantLecturers as $assistantLecturer) {
            if ($assistantLecturer->subject_id == $validated['subject']) {
                return back()->with([
                    'error' => 'Sudah menjadi asisten di mata kuliah tersebut',
                    'oldValue' => $validated
                ]);
            }
        }
    
        $store = [
            'interest'=>$validated['interest'],
            'subject_id'=>$validated['subject'],
            'user_id'=>$user->user_id
        ];
        AssistantLecturer::create($store);
    
        return redirect()->route('assistant.index')->with('success', 'Berhasil menambahkan asisten');
    }   
    
    public function edit($id){
        $assistant = AssistantLecturer::findOrFail($id);
        return view('dashboard.assistant.edit',[
            'header'=>'edit',
            'assistant'=>$assistant,
            'subjects'=>Subject::all()
        ]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'interest'=>'nullable',
        ]);

        $assistant = AssistantLecturer::findOrFail($id);

        $assistant->update([
            'interest' => $validated['interest'],
        ]);
        return redirect()->route('assistant.index')->with('success', 'Berhasil mengedit asisten');
    }

    public function destroy($id){
        $assistant = AssistantLecturer::findOrFail($id);
        $assistant->delete();
        return redirect()->route('assistant.index')->with('success', 'Berhasil menghapus asisten');
    }

    // Doma
    public function history(){
        $assistants = AssistantLecturer::where('user_id', session('data')['user_id'])->get();
        $subjectIds = $assistants->pluck('subject_id')->toArray();
        $subjects = Subject::whereIn('subject_id', $subjectIds)->get();
        $hadirCounts =[];
        $pertemuanCounts=[];
        foreach ($subjects as $subject) {
            $countHadir = 0;
            $countPertemuan = 0;
            foreach ($subject->lectureSchedule as $lectureSchedule) {
                foreach ($lectureSchedule->attendance as $attendance) {
                    $assistantAttendanceIds = $assistants->flatMap(function ($assistant) {
                        return $assistant->attendance->pluck('attendance_id')->toArray();
                    })->toArray();
        
                    if (in_array($attendance->attendance_id, $assistantAttendanceIds)) {
                        if($attendance->status == 'hadir'){
                            $countHadir++;
                        }
                        $countPertemuan++;
                    }
                }
            }
            $hadirCounts[] = $countHadir;
            $pertemuanCounts[] = $countPertemuan;
        }
        

        
        return view('dashboard.assistant.history',[
            'header'=>"Riwayat Presensi",
            'subjects'=>$subjects,
            'pertemuanCounts' => $pertemuanCounts,
            'hadirCounts'=>$hadirCounts,
        ]);
    }


}

