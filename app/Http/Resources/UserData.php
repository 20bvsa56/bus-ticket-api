<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserData extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'firstName'=>$this->firstName,
            'lastName'=>$this->lastName,
            'email'=>$this->email,
            'phoneNumber'=>$this->phoneNumber,
        ];
    }
}
