<?php

namespace App\Http\Controllers;

use App\Models\EmployeeStatus;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeStatusResource;

class EmployeeStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EmployeeStatusResource::collection(EmployeeStatus::all());
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
     * @param  \App\Models\EmployeeStatus  $employeeStatus
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeStatus $employeeStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeStatus  $employeeStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeStatus $employeeStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeStatus  $employeeStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeStatus $employeeStatus)
    {
        //
    }
}
