<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FromRoute as FromRouteResource;
use App\Http\Resources\ToRoute as ToRouteResource;
use App\Model\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function fromRoute(){
        //get items
        $start_points = Route::all();

        //return collection of items as a resource . here, collection returns a list of items
        return FromRouteResource::collection($start_points);
    }

    public function toRoute(){
        //get items
        $end_points = Route::all();

        //return collection of items as a resource . here, collection returns a list of items
        return ToRouteResource::collection($end_points);
    }

}
