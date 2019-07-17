<?php

namespace App\Http\Controllers;

use App\Food;
use App\FoodLounge;
use App\RoutinMeal;
use Illuminate\Http\Request;

class RoutinMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routin_meals = RoutinMeal::with(['meal_type', 'foods'])->paginate(10);

       // return ($routin_meals[1]->foods);
        return view('index.v1.pages.routin-meals-index', compact('routin_meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meals_type = RoutinMeal::with(['meal_type', 'foods']);
        $food_lounges = FoodLounge::with(['title', 'foods']);
        $foods = Food::with(['title', 'foods']);
        return view('index.v1.pages.routin-meals-create', compact('meals_type', 'food_lounges', 'foods'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function show(RoutinMeal $routinMeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function edit(RoutinMeal $routinMeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoutinMeal $routinMeal)
    {
        //
    }

    public function delete()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoutinMeal $routinMeal)
    {
        //
    }
}
