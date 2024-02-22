<?php

namespace App\Http\Controllers;

use App\Models\Kanishka;
use Illuminate\Http\Request;

class KanishkaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Kanishka::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $abc= Kanishka::create([
            'frist name' => "aaaaaa",
            'address' => "BBBBBB",
            'tp' => "88888"
        ]);
    
        return $abc;
    }

    /**
     * Display the specified resource.
     */
    public function show(Kanishka $kanishka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kanishka $kanishka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kanishka $kanishka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kanishka $kanishka)
    {
        //
    }
}
