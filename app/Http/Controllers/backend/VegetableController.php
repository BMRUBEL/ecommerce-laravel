<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vegetable;
class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Vegetable::all();
        return view('adminDash.vegetable.vegetable', compact('list'));
    }
    public function vegeDash()
    {
        $list = Vegetable::all();
        return view('frontend.vegetable', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vegetable = Vegetable::all();
        return view('adminDash.vegetable.vegetable',compact('vegetables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $vegetable = time() . '_' . $request->file('photo')->getClientOriginalName();
        $request->photo->move(public_path('vegetable/'), $vegetable);
        $data['photo'] = $vegetable;
        
        Vegetable::create($data);
        return redirect()->route('vegetabless.index')->with('msg','vegetable Created Successfully');
        
        // Vegetable::create($data);
        // return redirect()->route('vegetable.index')->with('msg','Vegetable Created Sussfully');
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
        Vegetable::find($id)->delete();
        return redirect()->route('vegetable.index');
    }
}
