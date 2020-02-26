<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\SoftDeletes;
class AuthModel extends Model
{
use SoftDeletes,HasRoles;
protected $guard_name = 'web';
    public function getData()
    {
        return static::orderBy('created_at','desc')->get();
    }
// public function roles()
// {
    // return $this->belongsToMany('App\models\Relationship\Role');
// }
}
