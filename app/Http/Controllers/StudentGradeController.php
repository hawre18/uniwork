<?php

namespace App\Http\Controllers;

use App\StudentGrade;
use Illuminate\Http\Request;

class StudentGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentgrade = StudentGrade::paginate(10);
        return view('index.v1.pages.studentgrade-index')->with(['studentgrade' => $studentgrade]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.v1.pages.studentgrade-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StudentGrade $studentgrade)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:student_grades|max:255|min:3',
        ]);
        try
        {
        $studentgrade->title = $request->title;
        $studentgrade->save();
        return redirect()->route('studentgrades.index');
            return redirect()->route('citys.index');
        }
        catch (\Exception $e){
            return 'خطا: ' . $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentGrade  $studentGrade
     * @return \Illuminate\Http\Response
     */
    public function show(StudentGrade $studentgrade)
    {
        return view('index.v1.pages.studentgrade-show', compact('studentgrade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentGrade  $studentGrade
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentGrade $studentgrade)
    {
        return view('index.v1.pages.studentgrade-edit', compact('studentgrade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentGrade  $studentGrade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentGrade $studentgrade)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:student_grades,title,' . $studentgrade->id .'|max:255|min:3',
        ]);
        try
        {
        $studentgrade->title = $request->title;
        $studentgrade->save();
        return redirect()->route('studentgrades.index');
        }
        catch (\Exception $e){
            return 'خطا: ' . $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentGrade  $studentGrade
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentGrade $studentGrade)
    {
        //
    }
    public function delete($id)
    {
        $studentgrade = StudentGrade::find($id);
        $studentgrade->delete();
        return redirect()->route('studentgrades.index');
    }
}
