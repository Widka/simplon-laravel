<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    public function users() {
        return $this->belongsToMany(Level::class, 'level_skill_user');
    }
}
