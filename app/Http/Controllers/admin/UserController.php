<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $validated = $request->validated();
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=Hash::make($request->password);
        $user->role=$request->role;
        $user->is_active=$request->is_active;
        $user->save();
        return redirect()->route('users.index');

    }


    public function show($id)
    {
        //
    }



    public function update(UpdateUserRequest $request)
    {
        $validated = $request->validated();
        $user=User::find($request->id);
        $user->update([
            $user->name=$request->name,
            $user->email=$request->email,
            $user->phone=$request->phone,
            $user->password=Hash::make($request->password),
            $user->role=$request->role,
            $user->is_active=$request->is_active,
        ]);

        return redirect()->route('users.index');
    }


    public function destroy(request $request)
    {
        $user=User::find($request->id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
