<?php

namespace App\Http\Controllers;

use App\Models\Toode;
use Illuminate\Http\Request;

class ToodeController extends Controller
{

    public function home(){
        $tooted = Toode::all()->toArray();
        return view('home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toode  $toode
     * @return \Illuminate\Http\Response
     */
    public function show(Toode $toode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toode  $toode
     * @return \Illuminate\Http\Response
     */
    public function edit(Toode $toode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toode  $toode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toode $toode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toode  $toode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toode $toode)
    {
        //
    }
}
