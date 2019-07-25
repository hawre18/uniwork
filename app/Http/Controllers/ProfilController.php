<?php

namespace App\Http\Controllers;

use App\City;
use App\Profil;
use App\State;
use App\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id,User $user_id)
    {
        $user_id = User::Find($id);
        $profil = Profil::create(['user_id'=>$request->id]);
        return view('index.v1.pages.profil-create', compact('user_id'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {



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
    public function edit(Profil $profil)
    {
        $state_types = State::all();
        $city_types = City::all();
        $profil = $profil::with(['state_type', 'city_type'])->find($profil->id);
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
        $routin_meal->update($request->all());
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
