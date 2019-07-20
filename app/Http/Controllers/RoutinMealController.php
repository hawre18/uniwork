<?php

namespace App\Http\Controllers;

use App\Food;
use App\FoodLounge;
use App\Meal;
use App\RoutinMeal;
use Illuminate\Http\Request;
use App\Http\Requests\RoutinMealRequest;
class RoutinMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routin_meals = RoutinMeal::with(['meal_type', 'foods', 'foodLounges'])->paginate(10);
        return view('index.v1.pages.routin-meals-index', compact('routin_meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meal_types = Meal::all();
        $food_lounges = FoodLounge::all();
        $foods = Food::all();
        return view('index.v1.pages.routin-meals-create', compact('meal_types', 'food_lounges', 'foods'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoutinMealRequest $request)
    {
        // todo add a time picker and insert real date
        try{
            $routin_meal = RoutinMeal::create($request->all());
            foreach($request->food_lounges as $food_lounge){
                $routin_meal->foodLounges()->attach($food_lounge);
            }
            foreach($request->foods as $food){
                $routin_meal->foods()->attach($food);
            }
            return redirect()->route('routin-meals.index');
        }
        catch(\Exception $e){
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function show(RoutinMeal $routin_meal)
    {
        return view('index.v1.pages.routin-meals-show', compact('routin_meal'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function edit(RoutinMeal $routin_meal)
    {
        $meal_types = Meal::all();
        $food_lounges = FoodLounge::all();
        $foods = Food::all();
        $routin_meal = RoutinMeal::with(['meal_type', 'foods', 'foodLounges'])->find($routin_meal->id);
        return view('index.v1.pages.routin-meals-edit', compact('meal_types', 'food_lounges', 'foods', 'routin_meal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoutinMeal $routin_meal)
    {
        $routin_meal->foodLounges()->sync($request->food_lounges);
        $routin_meal->foods()->sync($request->foods);
        $routin_meal->update(['start_date'=>$request->start_date, 'end_date'=>$request->end_date]);
        return redirect()->route('routin-meals.index');
    }

    public function delete($id)
    {
        $routin_meal = RoutinMeal::find($id);
        $routin_meal->delete();
        return redirect()->route('routin-meals.index');
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
