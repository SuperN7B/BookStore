<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Lecture;
use App\Student;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
$slug = Str::slug('Laravel 5 Framework', '-');
class GradeController extends Controller
{
    public function getGrade($id)
    {
        $lectures = Lecture::all();
        $student = Student::find($id);
        $teachers = User::all();
        return view('grade', ['student' => $student, 'id' => $id, 'teachers'=>$teachers, 'lectures' => $lectures]);
    }

    public function storeGrade($id)
    {
        $student = Student::find($id);
        $grade = new Grade;
        $grade->lecture_id = request('lectureIdI');
        $grade->student_id = $student->id;
        $grade->teacher_id = Auth::user()->id;
        $grade->comment = request('commentI');
        $grade->grade = request('gradeI');
        $grade->save();

        return back();
    }

    
    public function getUpdateGrade($id)
    {
        $lectures = Lecture::all();
        $grade = Grade::find($id);
        return view('update-grade', ['grade' => $grade, 'id' => $id, 'lectures' => $lectures]);
    }

    public function updateGrade(Request $request, $id)
    {
        $grade = Grade::find($id);
        if(request('lectureIdI') != null){
            $grade->lecture_id = request('lectureIdI');
        }
        $grade->comment = request('commentI');
        $grade->grade = request('gradeI');
        $grade->save();
        return redirect(route('grade', $grade->student_id));
    }

    public function destroyGrade($id)
    {
        $grade = Grade::find($id);
        Grade::find($id)->delete();
        return redirect(route('grade', $grade->student_id));
    }
}
