<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Destinations as DestinationsResource;
use App\Model\Destination;
use Illuminate\Http\Request;


class DestinationsController extends Controller
{
    public function getDestinations(){
        //get destinations
        $destinations = Destination::all();

        //return collection of destinations as a resource . here, collection returns a list of items
        return DestinationsResource::collection($destinations);
    }
}
