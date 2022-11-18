<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('dashboard.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();
        $Category = new Category();

        if ($request->image !="")
        {
            $path=Storage::disk('public')->putFile('/photos',$request->image);
            $Category->image=$path;
        }
        $Category->ar_name=$request->ar_name;
        $Category->en_name=$request->en_name;
        $Category->save();
        return redirect()->route('categories.index');
    }





    public function update(CategoryRequest $request)
    {
        $Category = Category::find($request->id);
        $validated = $request->validated();

        if ($request->image !="")
        {
            $path=Storage::disk('public')->putFile('/photos',$request->image);
        }
        $Category->update([
            $Category->ar_name=$request->ar_name,
            $Category->en_name=$request->en_name,
            $Category->image=$path
        ]);


        return redirect()->route('categories.index');
    }

    public function destroy(request $request)
    {
        $Category=Category::find($request->id);
        $Category->delete();
        return redirect()->route('categories.index');
    }
}
