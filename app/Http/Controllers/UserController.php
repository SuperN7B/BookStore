<?php

namespace App\Http\Controllers;

use App\User;
use App\Grade;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
$slug = Str::slug('Laravel 5 Framework', '-');
class UserController extends Controller
{
    public function getTeacher()
    {
        $teachers = User::all()->sortBy("surname");
        return view('teacher', ['teachers' => $teachers]);
    }

    public function storeTeacher(Request $request)
    {
        $teacher = new User;
        $teacher->name = request('nameI');
        $teacher->surname = request('surnameI');
        $teacher->email = request('emailI');
        $teacher->phone = request('phoneI');
        $teacher->password = Hash::make(request('passwordI'));
        
        $teacher->save();
        
        return redirect(route('teacher'));
    }

    public function GetUpdateTeacher($id)
    {
        $teacher = User::find($id);
        return view('update-teacher', ['teacher' => $teacher, 'id' => $id]);
    }

    public function updateTeacher(Request $request, $id)
    {
        $teacher = User::find($id);
        $teacher->name = $request->get('nameI');
        $teacher->surname = $request->get('surnameI');
        $teacher->email = $request->get('emailI');
        $teacher->phone = $request->get('phoneI');
        $teacher->save();

        return redirect(route('teacher'));
    }

    public function destroyTeacher($id)
    {
        $grades = Grade::all();
        foreach ($grades as $grade ) {
            if($grade->teacher_id == $id){
                Grade::find($grade->id)->delete();
            }
        }
        User::find($id)->delete();
        return redirect(route('teacher'));
    }
}
