<?php

namespace App\models\Relationship;

use Illuminate\Database\Eloquent\Model;

class TestUser extends Model
{
    public function roles()
    {
        return $this->belongsToMany('App\models\Relationship\Role');
    }
}
