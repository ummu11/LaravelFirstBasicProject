<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AuthModel extends Model
{
use SoftDeletes;
    public function getData()
    {
        return static::orderBy('created_at','desc')->get();
    }
}
