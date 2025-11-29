<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];
    protected $casts = ['status' => 'boolean'];

    // Active items scope descending by created_at
    public function scopeActiveLatest($query)
    {
        return $query->where('status', 1)
                     ->orderByDesc('created_at');
    }
}
