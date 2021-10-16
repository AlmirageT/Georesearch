<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poi extends Model
{
    protected $table = "pois";
    protected $fillable = [
        'id',
        'name',
        'shape',
        'category_id',
        'category_name',
        'latitude',
        'longitude'
    ];
    public $timestamps = false;
}
