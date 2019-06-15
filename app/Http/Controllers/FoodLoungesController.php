<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodLounge;
use App\Http\Requests\FoodLoungeRequest;
class FoodLoungesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food_lounges = FoodLounge::paginate(10);
        return view('index.v1.pages.food-lounges-index', compact('food_lounges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.v1.pages.food-lounges-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodLoungeRequest $request)
    {
        try{
            $food_lounge = new FoodLounge();
            $food_lounge->title = $request->title;
            $food_lounge->description = $request->description;
            $food_lounge->save();
            return redirect()->route('food-lounges.index');
        }catch (\Exception $e){
            return 'خطا: ' . $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FoodLounge $food_lounge)
    {
        return view('index.v1.pages.food-lounges-show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodLounge $food_lounge)
    {
        return view('index.v1.pages.food-lounges-edit', compact('food_lounge'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,FoodLounge $food_lounge)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:food_lounges,title,' .$food_lounge->id .'|max:255|min:3',
            'description' => 'required|min:3',
        ]);
        try{
            $food_lounge->title = $request->title;
            $food_lounge->description = $request->description;
            $food_lounge->save();
            return redirect()->route('food-lounges.index');
        } catch (\Exception $e){
            return 'خطا'.$e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $food = FoodLounge::find($id);
        $food->delete();
        return redirect()->route('food-lounges.index');    }


}
