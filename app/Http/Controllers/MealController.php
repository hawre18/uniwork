<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::paginate(10);
        return view('index.v1.pages.meal-index')->with(['meals' => $meals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.v1.pages.meal-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meals = new Meal();
        $meals->title = $request->title;
        $meals->save();
        return redirect()->route('meals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meals)
    {
        return view('index.v1.pages.meal-show', compact('meals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        return view('index.v1.pages.meal-edit', compact('meal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {

        $meal->title = $request->title;
        $meal->save();
        return redirect()->route('meals.index');
    }

    public function delete($id)
    {
        $meals = Meal::find($id);
        $meals->delete();
        return redirect()->route('meals.index');
    }
}
