<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tickets extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'phoneNumber'=>$this->phoneNumber,
            'amount'=> $this->amount,
            'allocated_seats'=>$this->allocated_seats,
            'title'=>$this->title,
            'departure_date'=>$this->departure_date,
            'start_point'=>$this->start_point,
            'end_point'=>$this->end_point,
            'vehicle_name'=>$this->vehicle_name,
            'vehicle_type'=>$this->vehicle_type,
            'price'=>$this->price
        ];
    }
}
