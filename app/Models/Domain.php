<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Domain extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'price', 'status'];

    protected static function booted()
    {
        static::creating(function ($domain) {
            if (empty($domain->slug)) {
                $domain->slug = Str::slug($domain->name);
            }
        });

        static::updating(function ($domain) {
            if (empty($domain->slug)) {
                $domain->slug = Str::slug($domain->name);
            }
        });
    }
}
