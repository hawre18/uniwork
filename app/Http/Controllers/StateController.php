<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::paginate(10);
        return view('index.v1.pages.state-index')->with(['states' => $states]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.v1.pages.state-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state = new State();
        $state->title = $request->title;
        $state->save();
        return redirect()->route('states.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        return view('index.v1.pages.state-show', compact('state'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        return view('index.v1.pages.state-edit', compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {

        $state->title = $request->title;
        $state->save();
        return redirect()->route('states.index');
    }

    public function delete($id)
    {
        $state = State::find($id);
        $state->delete();
        return redirect()->route('states.index');
    }
}