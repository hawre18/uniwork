<?php

namespace App\Http\Controllers;

use App\StudentCondition;
use Illuminate\Http\Request;

class StudentConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentcondition = StudentCondition::paginate(10);
        return view('index.v1.pages.student-condition-index')->with(['studentcondition' => $studentcondition]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.v1.pages.student-condition-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentcondition = new StudentCondition();
        $studentcondition->title = $request->title;
        $studentcondition->save();
        return redirect()->route('studentconditions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(StudentCondition $studentcondition)
    {
        return view('index.v1.pages.student-condition-show', compact('studentcondition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentCondition $studentcondition)
    {
        return view('index.v1.pages.student-condition-edit', compact('studentcondition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentCondition $studentcondition)
    {

        $studentcondition->title = $request->title;
        $studentcondition->save();
        return redirect()->route('studentconditions.index');
    }

    public function delete($id)
    {
        $studentcondition = StudentCondition::find($id);
        $studentcondition->delete();
        return redirect()->route('studentconditions.index');
    }
}
