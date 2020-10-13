<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Tickets as TicketsResource;
use DB;

class TicketsController extends Controller
{
    public function getTickets(){

        $tickets=DB::select(
            'SELECT tic.id,tic.name, tic.email, tic.phoneNumber, tic.amount, tic.allocated_seats, tri.title, tri.departure_date,
       r.start_point, r.end_point, v.name AS vehicle_name, vt.name AS vehicle_type, tri.price
FROM tickets AS tic
INNER JOIN trips AS tri ON tic.trip_id = tri.id
INNER JOIN routes AS r ON tri.route_id = r.id
INNER JOIN vehicles AS v ON tri.vehicle_id = v.id
INNER JOIN vehicle_type AS vt ON v.vehicleType_id = vt.id
 '
        );
        return TicketsResource::collection($tickets);
    }
//    public function getUsersData(Request $request){
//    //get tickets data
////    $id=$request->input('id');
//       // ->where('id','=',$id)
//    $tickets = DB::table('tickets')->get();
//
//    //return collection of user data as a resource . here, collection returns a list of items
//    return TicketsResource::collection($tickets);
//}
}
