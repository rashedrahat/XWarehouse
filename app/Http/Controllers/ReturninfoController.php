<?php

namespace App\Http\Controllers;

use App\Returninfo;
use Illuminate\Http\Request;

class ReturninfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('returninfo.returninfos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('returninfo.returnForm');
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
     * @param  \App\Returninfo  $returninfo
     * @return \Illuminate\Http\Response
     */
    public function show(Returninfo $returninfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Returninfo  $returninfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Returninfo $returninfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Returninfo  $returninfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Returninfo $returninfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Returninfo  $returninfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Returninfo $returninfo)
    {
        //
    }
}
