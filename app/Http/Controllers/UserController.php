<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['role'])->paginate(10);
        return view('index.v1.pages.user-index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        return view('index.v1.pages.user-create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|numeric',
            'password' => 'required|unique:users|numeric',
            'first_name' => 'required|max:255|min:3|alpha',
            'last_name' => 'required|max:255|min:3|alpha',
            'role_id' => 'required',
        ]);
        $user = User::create($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('index.v1.pages.user-show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,User $user)
    {

        $roles = Role::all();
        $user = User::with(['role'])->find($user->id);
        return view('index.v1.pages.user-edit', compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username,'.$user->id.'|numeric',
            'password' => 'required|unique:users,password,'.$user->id.'|numeric',
            'first_name' => 'required|max:255|min:3|alpha',
            'last_name' => 'required|max:255|min:3|alpha',
            'role_id' => 'required',
        ]);
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
