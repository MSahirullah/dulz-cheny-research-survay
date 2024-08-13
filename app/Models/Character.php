<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'kid_id',
        'm1',
        'm2',
        'm3',
        'm4',
        'f1',
        'f2',
        'f3',
        'f4',
        'a1',
        'a2',
        'a3',
        'a4',
        'a5',
        'a6',
        'a7',
        'a8',
    ];

    public function kid()
    {
        return $this->belongsTo(Kid::class);
    }
}
