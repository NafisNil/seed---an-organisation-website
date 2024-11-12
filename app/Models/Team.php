<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //ory
    protected $fillable = ['photo','name','designation', 'linkedin', 'category'];
}
