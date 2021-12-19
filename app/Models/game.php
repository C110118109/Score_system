<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;

    public function teams() {
        return $this->hasMany('App\Models\team');
    }

    public function createAt(){
        return $this->belongsTo('App\Models\User');
    }

    public function adjudicators()
    {
        return $this->hasMany('App\Models\adjudicator');
    }

    public function team_details_titles(){
        return $this->hasMany('App\Models\team_details_title');
    }


}
