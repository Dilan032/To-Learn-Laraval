<?php

namespace App\Http\Controllers;

use App\Models\Dilan;
use Illuminate\Http\Request;

class DilanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $myNames = dilan::all();
        return view('dilan.list',compact('myNames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dilan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $abc= dilan::create([
            'frist_name' => $request -> FName,
            'address' => $request -> Address,
            'tp' => $request -> Tp 
        ]);
    
        return $abc;
    }

    /**
     * Display the specified resource.
     */
    public function show(Dilan $dilan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dilan $dilan)
    {
        return view('dilan.update',compact('dilan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dilan $dilan)
    {
        $dilan -> update([
            'frist_name' => $request -> FName,
            'address' => $request -> Address,
            'tp' => $request -> Tp 
        ]);

        return $dilan;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dilan $dilan)
    {
        $paramiterDilan = $dilan->delete();
        if($paramiterDilan){
            // return redirect()-back();
            return redirect()->back()->with('msg',"Delete ok");
        }else{
            return redirect()->back()->with('msg',"Delete erroe");
        }
    }
}
