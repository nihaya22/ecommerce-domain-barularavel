<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    protected $fillable = [
        'service_id',
        'name',
        'email',
        'phone',
        'message'
    ];
}
