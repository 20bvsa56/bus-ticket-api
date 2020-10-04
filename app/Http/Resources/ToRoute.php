<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ToRoute extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'end_point'=>$this->end_point,
        ];
    }
}
