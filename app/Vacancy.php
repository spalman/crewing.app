<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table='vacancies';
    protected $fillable = array('id',	'name',	'description',	'country',	'position',	'languages',	'sex',	'age');
}
