<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guests';
    protected $fillable = [
        'firstName','lastName','email','phoneNumber'
    ];
}
