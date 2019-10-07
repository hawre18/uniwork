<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use Illuminate\Http\Request;
use App\Food;
//use App\Http\Requests\FoodLoungeRequest;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::paginate(10);
        return view('index.v1.pages.food-index')->with(['foods' => $foods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.v1.pages.food-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodRequest $request)
    {
        $validatedData = $request->validate([
        'title' => 'required|unique:foods|max:255',
        'price' => 'required|max:50000|min:15000|numeric',
        'description' => 'required',
        ]);
        try{
            $food = new Food;
            $food->title = $request->title;
            $food->price = $request->price;
            $food->description = $request->description;
            $food->save();
            return redirect()->route('foods.index');
        } catch (\Exception $e){
            return 'خطا'.$e;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return view('index.v1.pages.food-show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        return view('index.v1.pages.food-edit', compact('food'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:foods,title,' . $id .'|max:255',
            'price' => 'required|max:50000|min:15000|numeric',
            'description' => 'required',
        ]);
        try{
            $food = Food::find($id);
            $food->title = $request->title;
            $food->price = $request->price;
            $food->description = $request->description;
            $food->save();
            return redirect()->route('foods.index');
        } catch (\Exception $e){
            return 'خطا'.$e;
        }
    }

    public function delete($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect()->route('foods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }


}
