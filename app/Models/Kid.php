<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_name',
        'age',
        'school',
    ];


    public function audios()
    {
        return $this->hasMany(Audio::class);
    }

    public function backgrounds()
    {
        return $this->hasMany(Background::class);
    }

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
