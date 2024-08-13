<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;

    protected $fillable = [
        'kid_id',
        'bonnie',
        'daphne',
        'mickey',
        'timmy',
    ];

    public function kid()
    {
        return $this->belongsTo(Kid::class);
    }
}
