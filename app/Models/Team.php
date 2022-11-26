<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function getMatchesPlayedAttribute()
    {
        return $this->won + $this->draw + $this->lost;
    }

    public function getgoalsDifferenceAttribute()
    {
        return $this->goals_for - $this->goals_against;
    }

    public  static function boot()
    {
        parent::boot();

        static::saving(function($team){
            $team->pts = ($team->won * 3) + ($team->draw);
        });
    }
}
