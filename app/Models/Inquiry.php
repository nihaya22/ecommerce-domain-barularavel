<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        
    ];

    /**
     * Scope: hanya inquiry dengan status 'New' (belum dibaca)
     */
    public function scopeUnread($query)
    {
        return $query->where('status', 'New');
    }

    /**
     * Helper: cek apakah inquiry belum dibaca
     */
    public function isUnread(): bool
    {
        return $this->status === 'New';
    }
}