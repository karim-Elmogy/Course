<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequest;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{

    public function index()
    {
        $lessons=Lesson::all();
        $courses=Course::all();
        return  view('dashboard.lessons.index',compact('lessons','courses'));
    }


    public function create()
    {
        $courses=Course::all();
        return  view('dashboard.lessons.create',compact('courses'));
    }


    public function store(LessonRequest $request)
    {
        $validated = $request->validated();
        $lesson = new Lesson();

        if ($request->image !="")
        {
            $path=Storage::disk('public')->putFile('/lessons',$request->image);
            $lesson->image=$path;
        }
        $lesson->ar_name=$request->ar_name;
        $lesson->en_name=$request->en_name;
        $lesson->ar_descr=$request->ar_descr;
        $lesson->en_descr=$request->en_descr;
        $lesson->url=$request->url;
        $lesson->duration=$request->duration;
        $lesson->is_active=$request->is_active;
        $lesson->course_id=$request->course_id;
        $lesson->save();
        return redirect()->route('lessons.index');
    }



    public function update(LessonRequest $request)
    {
        $lesson =Lesson::find($request->id);
        $validated = $request->validated();
        if ($request->image !="")
        {
            $path=Storage::disk('public')->putFile('/lessons',$request->image);
            $lesson->image=$path;
        }
        $lesson->update([
            $lesson->ar_name=$request->ar_name,
            $lesson->en_name=$request->en_name,
            $lesson->ar_descr=$request->ar_descr,
            $lesson->en_descr=$request->en_descr,
            $lesson->url=$request->url,
            $lesson->duration=$request->duration,
            $lesson->is_active=$request->is_active,
            $lesson->course_id=$request->course_id,
        ]);
        return redirect()->route('lessons.index');
    }


    public function destroy(request $request)
    {
        $lesson=Lesson::find($request->id);
        $lesson->delete();
        return redirect()->route('lessons.index');
    }
}
