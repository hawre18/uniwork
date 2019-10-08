<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Major;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = Major::paginate(10);
        return view('index.v1.pages.major-index')->with(['majors' => $majors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.v1.pages.major-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Major $major)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:majors|max:255|min:3',
        ]);
        try{
        $major->title = $request->title;
        $major->save();
        return redirect()->route('majors.index');}
        catch (\Exception $e){
            return 'خطا'.$e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {
        return view('index.v1.pages.major-show', compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        return view('index.v1.pages.major-edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Major $major)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:majors,title,' . $major->id .'|max:255|min:3',
        ]);
        try{
        $major->title = $request->title;
        $major->save();
        return redirect()->route('majors.index');}
        catch (\Exception $e){
            return 'خطا'.$e;
        }
    }

    public function delete($id)
    {
        $major = Major::find($id);
        $major->delete();
        return redirect()->route('majors.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
