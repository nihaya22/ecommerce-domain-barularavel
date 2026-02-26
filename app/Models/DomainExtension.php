<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DomainExtension extends Model
{
    protected $fillable = [
        'extension',
        'category',
        'price',
        'is_active'
    ];
}
