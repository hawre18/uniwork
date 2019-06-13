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
            return $food_lounge;
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
    public function show($id)
    {
        $food_lounge = FoodLounge::findOrFail($id);
        return $food_lounge;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
