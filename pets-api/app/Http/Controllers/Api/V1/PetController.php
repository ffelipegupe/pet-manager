<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Models\Pet;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PetResource;
use App\Http\Resources\V1\PetCollection;
use Illuminate\Http\Request;
use App\Http\Requests\ShowPetRequest;
use Symfony\Component\Console\Output;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return new PetCollection(Pet::all());
    }

    public function findByStatus(Request $request)
    {
        $findByStatus = $request->query('status');

        if (!in_array($findByStatus, ['sold', 'pending', 'available'])){
            return [
                'code' => 400,
                'type' => 'application/json',
                'message' => 'Invalid status value'
            ];
            
        }

        $pets = Pet::where('status', $findByStatus)->get(); 
        return [
            'code' => 200,
            'type' => 'application/json',
            'message' => 'successful operation',
            'data' => new PetCollection($pets)
        ];
        
        // return response(new PetCollection($pets), 200);
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
     * @param  \App\Http\Requests\StorePetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        // $out->writeln(gettype($request->all()));
        return new PetResource(Pet::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return [
            'code' => 200,
            'type' => 'application/json',
            'message' => 'successful operation',
            'data' => new PetResource($pet)
        ];
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    // public function edit(Pet $pet)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetRequest  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $pet->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return [
            'code' => 200,
            'type' => 'application/json',
            'message' => 'successful operation'
        ];
    }
}
