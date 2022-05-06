<?php

namespace App\Http\Controllers;

use App\Models\SeekerSkill;
use App\Http\Requests\StoreSeekerSkillRequest;
use App\Http\Requests\UpdateSeekerSkillRequest;

class SeekerSkillController extends Controller
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
     * @param  \App\Http\Requests\StoreSeekerSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeekerSkillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeekerSkill  $seekerSkill
     * @return \Illuminate\Http\Response
     */
    public function show(SeekerSkill $seekerSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeekerSkillRequest  $request
     * @param  \App\Models\SeekerSkill  $seekerSkill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeekerSkillRequest $request, SeekerSkill $seekerSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeekerSkill  $seekerSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeekerSkill $seekerSkill)
    {
        //
    }
}
