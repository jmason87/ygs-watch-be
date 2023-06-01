<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Player extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uuid';

    public function set()
    {
        return $this->belongsTo(Set::class);
    }

    public function season()
    {
        return $this->hasMany(Season::class);
    }

    public function seasonTeam(): HasOneThrough
    {
        return $this->hasOneThrough(Team::class, Season::class);
    }
    
    public function cardTeam()
    {
        return $this->belongsTo(Team::class, 'card_team_uuid');
    }

    public function draftTeam()
    {
        return $this->belongsTo(Team::class, 'draft_team_uuid');
    }

}
