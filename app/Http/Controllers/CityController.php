<?php

namespace App\Http\Controllers;

use App\City;
use App\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = City::with(['state_type'])->paginate(10);
        return view('index.v1.pages.city-index', compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        return view('index.v1.pages.city-create', compact('states'));
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
            'title' => 'required|unique:cities|max:255',
            'state_id' => 'required',
        ]);
            $city = City::create($request->all());
            return redirect()->route('citys.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return view('index.v1.pages.city-show', compact('city'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function edit( Request $request, City $city)
    {
        $states_type = State::all();
        $city = City::with(['state_type'])->find($city->id);
        return view('index.v1.pages.city-edit', compact('states_type','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoutinMeal  $routinMeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:cities,title,' . $city->id .'|max:255',
            'state_id' => 'required',
        ]);
        $city->update($request->all());
        return redirect()->route('citys.index');
    }

    public function delete($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect()->route('citys.index');
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
