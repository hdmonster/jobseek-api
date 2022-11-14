<?php

namespace App\Http\Controllers;

use App\Models\UserEducation;
use App\Http\Requests\StoreUserEducationRequest;
use App\Http\Requests\UpdateUserEducationRequest;

class UserEducationController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserEducationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserEducationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserEducation  $userEducation
     * @return \Illuminate\Http\Response
     */
    public function show(UserEducation $userEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserEducation  $userEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(UserEducation $userEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserEducationRequest  $request
     * @param  \App\Models\UserEducation  $userEducation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserEducationRequest $request, UserEducation $userEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserEducation  $userEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserEducation $userEducation)
    {
        //
    }
}
