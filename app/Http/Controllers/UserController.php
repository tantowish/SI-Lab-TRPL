<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\LabAdministrator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        if (session('data')->getTable()=='lab_administrators'){
            $user = LabAdministrator::findOrFail(session('data')['lab_admin_id']);
        }
        else{
            $user = User::findOrFail(session('data')['user_id']);
        }
        return view('dashboard.user.index',[
            'header'=>'Profile',
            'user'=>$user
        ]);
    }
    public function edit($id){
        if (session('data')->getTable()=='lab_administrators'){
            $user = LabAdministrator::findOrFail($id);
        }  
        else{
            $user = User::findOrFail($id);
        }
        return view('dashboard.user.edit',[
            'header'=>'Profile Edit',
            'user'=>$user
        ]);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name'=>'required|max:100',
            'username'=>'required|max:100',
            'email'=>'required|max:100',
        ]);
        if($request->file('photo')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('img/user');
        }

        if (session('data')->getTable() == 'lab_administrators') {
            LabAdministrator::where('lab_admin_id', $id)->update($validatedData);
            $user = LabAdministrator::findOrFail($id); // Retrieve the updated record
        } else {
            User::where('user_id', $id)->update($validatedData);
            $user = User::findOrFail($id); // Retrieve the updated record
        }

        session(['data' => $user]); // Update the session data with the new user information

        return redirect()->route('profile.index')->with('success', 'Berhasil mengupdate profile');

    }
}
