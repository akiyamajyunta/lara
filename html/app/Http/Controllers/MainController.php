<?php

namespace App\Http\Controllers;

use App\Models\main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front/test');
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
    public function show($id)
    {
        $main = Main::find($id);
        return view('front/get', ['id' => $id, 'main' => $main]);
    }

    public function all()
    {
        $mains = Main::get();
        return view('front/all', ['mains' => $mains]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(main $main)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, main $main)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(main $main)
    {
        //
    }
}
