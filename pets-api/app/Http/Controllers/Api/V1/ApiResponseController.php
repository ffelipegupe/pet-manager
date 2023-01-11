<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreApiResponseRequest;
use App\Http\Requests\UpdateApiResponseRequest;
use App\Models\ApiResponse;
use App\Http\Controllers\Controller;

class ApiResponseController extends Controller
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
     * @param  \App\Http\Requests\StoreApiResponseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApiResponseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApiResponse  $apiResponse
     * @return \Illuminate\Http\Response
     */
    public function show(ApiResponse $apiResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApiResponse  $apiResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(ApiResponse $apiResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApiResponseRequest  $request
     * @param  \App\Models\ApiResponse  $apiResponse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApiResponseRequest $request, ApiResponse $apiResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiResponse  $apiResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiResponse $apiResponse)
    {
        //
    }
}
