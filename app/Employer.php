<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
	public $timestamps = false;
    protected $fillable = [
        'name','fonction',
    ];
}
