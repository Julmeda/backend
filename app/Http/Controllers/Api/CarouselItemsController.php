<?php

namespace App\Http\Controllers\Api;

use App\Models\CarouselItems;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarouselItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //Read
    {
        return CarouselItems::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //Create
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //Read
    {
        return CarouselItems::findOrFail($id);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //Update
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //Delete
    {
        $carouselItem = CarouselItems::findOrFail($id);

        $carouselItem->delete();

        return $carouselItem;
    }
}
