<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FromRoute extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'start_point'=>$this->start_point,
        ];
    }
}
