<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Featur;

class FeaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Featur::all();
        return view('adminDash.featur.featur', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $featur = Featur::all();
        return view('adminDash.featur.featur',compact(featurs));
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
        
        Featur::create($data);
        return redirect()->route('featur.index')->with('msg','Featur Create Sussfully');
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
        $featur = Featur::all();
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
        Featur::find($id)->delete();
        return redirect()->route('featur.index');
    }
}
