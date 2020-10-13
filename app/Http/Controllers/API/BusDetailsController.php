<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BusDetails as BusDetailsResource;
use DB;

class BusDetailsController extends Controller{

    public function getBusDetails(Request $request){

        $busDetails = DB::select(
            'SELECT v.id, t.price, t.departure_date, r.start_point, r.end_point, r.stoppage_points, v.name as vehicle_name, vt.name as vehicle_type,
             vt.row , vt.column , vt.layout , f.services
            FROM trips AS t
            INNER JOIN routes AS r ON t.route_id = r.id
            INNER JOIN vehicles AS v ON v.id = t.vehicle_id
            INNER JOIN vehicle_type AS vt ON vt.id = v.vehicleType_id
            INNER JOIN facilities AS f ON f.id = vt.facility_id
            where r.start_point= "' . $request->input('start_point').'" AND r.end_point= "'  .$request->input('end_point'). '" AND t.departure_date= "'  .$request->input('departure_date'). '"' );

        //return ($busDetails);
       return BusDetailsResource::collection($busDetails);
    }

}


