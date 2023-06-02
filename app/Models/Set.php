<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uuid';

    public function player()
    {
        return $this->belongsToMany(Player::class);
    }
}
