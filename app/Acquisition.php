<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
use App\User;
use App\Level;

class Acquisition extends Model
{
    public function skills() {
        return $this->belongsToMany(Skill::class, 'level_skill_user');
    }
    public function levels() {
        return $this->belongsToMany(Level::class, 'level_skill_user');
    }
    public function users() {
        return $this->belongsToMany(User::class, 'level_skill_user');
    }
}