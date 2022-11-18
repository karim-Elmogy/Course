<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Http\Requests\CourseRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        $categories=Category::all();
        $user=User::where('id',Auth::id())->first();
        return view('dashboard.courses.index',compact('courses','categories','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('dashboard.courses.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $validated = $request->validated();
        $course = new Course();

        if ($request->image !="")
        {
            $path=Storage::disk('public')->putFile('/courses',$request->image);
            $course->image=$path;
        }
        $course->ar_name=$request->ar_name;
        $course->en_name=$request->en_name;
        $course->ar_descr=$request->ar_descr;
        $course->en_descr=$request->en_descr;
        $course->price=$request->price;
        $course->is_active=$request->is_active;
        $course->category_id=$request->category_id;
        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(CourseRequest $request)
    {
        $course = Course::find($request->id);
        $validated = $request->validated();

        if ($request->image !="")
        {
            $path=Storage::disk('public')->putFile('/courses',$request->image);
            $course->image=$path;
        }
        $course->update([
            $course->ar_name=$request->ar_name,
            $course->en_name=$request->en_name,
            $course->ar_descr=$request->ar_descr,
            $course->en_descr=$request->en_descr,
            $course->price=$request->price,
            $course->is_active=$request->is_active,
            $course->category_id=$request->category_id,
        ]);

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $courses=Course::find($request->id);
        $courses->delete();
        return redirect()->route('courses.index');
    }
}
