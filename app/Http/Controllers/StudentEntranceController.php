<?php

namespace App\Http\Controllers;

use App\StudentEntrance;
use Illuminate\Http\Request;

class StudentEntranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $student_entrance = StudentEntrance::paginate(10);
        return view('index.v1.pages.student-entrance-index')->with(['student_entrance' => $student_entrance]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.v1.pages.student-entrance-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studententrances = new StudentEntrance();
        $studententrances->title = $request->title;
        $studententrances->save();
        return redirect()->route('studententrances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(StudentEntrance $studententrance)
    {
        return view('index.v1.pages.student-entrance-show', compact('studententrance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentEntrance $studententrance)
    {
        return view('index.v1.pages.student-entrance-edit', compact('studententrance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentEntrance $studententrance)
    {

        $studententrance->title = $request->title;
        $studententrance->save();
        return redirect()->route('studententrances.index');
    }

    public function delete($id)
    {
        $studententrance = StudentEntrance::find($id);
        $studententrance->delete();
        return redirect()->route('studententrances.index');
    }
}
