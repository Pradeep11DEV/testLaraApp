<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\LoginUsers;


class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $loggers = LoginUsers::all();

        return view('loggers.index')->with('loggedUsers',$loggers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        //
    }
}
