<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class hospitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = Hospital::all();
        return view('backend.hospitals.index',compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.hospitals.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hospital = new Hospital();
        $hospital->hospital = $request->hospital;
        $hospital->save();
        return redirect()->route('hospitals.index');
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
        $hospital = Hospital::find($id);
        if($hospital){
            return view('backend.hospitals.edit',compact('hospital'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hospital = Hospital::find($id);
        if($hospital){
            $hospital->update([
                'hospital' =>$request->hospital
            ]);
        }
        return redirect()->route('hospitals.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hospital = Hospital::find($id);
        if($hospital){
            $hospital->delete();
            return redirect()->back();
        }
    }
}
