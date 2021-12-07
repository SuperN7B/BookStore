<?php

namespace App\Http\Controllers;

use App\Lecture;
use App\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
$slug = Str::slug('Laravel 5 Framework', '-');
class LectureController extends Controller
{
    public function getLecture()
    {
        $lectures = Lecture::all()->sortBy("title");

        return view('lecture', ['lectures' => $lectures]);
    }

    public function storeLecture(Request $request)
    {
        $lecture = new lecture;
        $lecture->title = request('titleI');
        $lecture->description = request('descriptionI');
        $lecture->save();

        return redirect(route('lecture'));
    }

    public function GetUpdateLecture($id)
    {
        $lecture = Lecture::find($id);

        return view('update-lecture', ['lecture' => $lecture, 'id' => $id]);
    }

    public function updateLecture(Request $request, $id)
    {
        $lecture = Lecture::find($id);
        $lecture->title = $request->get('titleU');
        $lecture->description = $request->get('descriptionU');
        $lecture->save();

        return redirect(route('lecture'));
    }

    public function destroyLecture($id)
    {
        $grades = Grade::all();
        foreach ($grades as $grade ) {
            if($grade->lecture_id == $id){
                Grade::find($grade->id)->delete();
            }
        }
        Lecture::find($id)->delete();

        return redirect('paskaitos');
    }
}
