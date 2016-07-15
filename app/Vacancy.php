<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Vacancy extends Model
{
    protected $table='vacancies';
    protected $fillable = array('id',	'name','salary_from','salary_to', 'education',	'description',	'country',	'position',	'languages',	'sex',	'age_from','age_to');
    public  function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s',$date)->format('H:i d.m.Y');
    }
}
