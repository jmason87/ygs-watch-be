<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uuid';

    public function Set()
    {
        return $this->belongsTo(Set::class);
    }
}
