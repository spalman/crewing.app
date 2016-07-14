<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table='vacancies';
    protected $fillable = array('id',	'name','salary_from','salary_to', 'education',	'description',	'country',	'position',	'languages',	'sex',	'age_from','age_to');
}
