<?php

namespace App\Http\Controllers;

use App\Models\Seeker;
use App\Http\Requests\StoreSeekerRequest;
use App\Http\Requests\UpdateSeekerRequest;

class SeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSeekerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeekerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seeker  $seeker
     * @return \Illuminate\Http\Response
     */
    public function show(Seeker $seeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeekerRequest  $request
     * @param  \App\Models\Seeker  $seeker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeekerRequest $request, Seeker $seeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seeker  $seeker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seeker $seeker)
    {
        //
    }
}
