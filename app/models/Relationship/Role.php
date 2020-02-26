<?php

namespace App\models\Relationship;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role extends Model
{
    use SoftDeletes;
    public function AuthModel(){

            // return $this->belongsToMany('App\models\Relationship\AuthModel');
        }
    }
  