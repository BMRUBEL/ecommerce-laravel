<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Hero::all();
        return view('adminDash.hero.hero', compact('list'));
    }
    public function heroDash()
    {
        $list = Hero::all();
        return view('frontend.hero', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hero = Hero::all();
        return view('adminDash.hero.hero',compact(hero));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $fruits = time() . '_' . $request->file('fruits')->getClientOriginalName();
        $request->fruits->move(public_path('fruits/'), $fruits);
        $data['fruits'] = $fruits;
        $vegetable = time() . '_' . $request->file('vegetable')->getClientOriginalName();
        $request->vegetable->move(public_path('vegetable/'), $vegetable);
        $data['vegetable'] = $vegetable;
        
        Hero::create($data);
        return redirect()->route('featur.index')->with('msg','Hero Create Sussfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Hero::find($id)->delete();
        return redirect()->route('hero.index');
    }
}
