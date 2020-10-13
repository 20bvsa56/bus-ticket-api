<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BusDetails extends JsonResource
{

    public function toArray($request)
    {
        return [
            'vehicle_id'=>$this->id,
            'start_point'=>$this->start_point,
            'end_point'=>$this->end_point,
            'stoppage_points'=>$this->stoppage_points,
            'vehicle_name'=>$this->vehicle_name,
            'vehicle_type'=>$this->vehicle_type,
            'services'=>$this->services,
            'price'=>$this->price,
            'seat_row'=>$this->row,
            'seat_column'=>$this->column,
            'seat_layout'=>$this->layout,
            'departure_date'=>$this->departure_date
        ];
    }
}
