<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table='languages';
    protected $fillable = array('language','iso_639-1');
}
