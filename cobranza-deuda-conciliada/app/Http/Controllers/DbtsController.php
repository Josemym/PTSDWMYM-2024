<?php

namespace App\Http\Controllers;

use App\Models\Dbts;
use Illuminate\Http\Request;

class DbtsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dbts = Dbts::all();
        return view("dbts.index", compact('dbts'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dbts $dbts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dbts $dbts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dbts $dbts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dbts $dbts)
    {
        //
    }
}
