<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Domain extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'status',
    ];

    // Auto-generate slug dari name saat create
    protected static function booted()
    {
        static::creating(function ($domain) {
            if (empty($domain->slug)) {
                $domain->slug = Str::slug($domain->name);
            }
        });

        static::updating(function ($domain) {
            $domain->slug = Str::slug($domain->name);
        });
    }

    // Scope untuk domain yang available
    public function scopeAvailable($query)
    {
        return $query->where('status', 'Available');
    }

    // Format harga ke Rupiah
    public function getPriceFormattedAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}