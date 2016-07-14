<?php

namespace App\Http\Controllers;

use App\Vacancy;
use App\Country;
use App\Language;
use App\Vacancy_lang;
use App\Http\Requests;
use Request;
use DB;


class VacanciesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data=[
            'vacancies'=>Vacancy::all(),
            'countries'=>Country::all(),
            'languages'=>Language::all(),
            'vac_lang'=>Vacancy_lang::all()
        ];
        return view('vacancies',$data);
    }


    public function create()
    {
        $data = Request::all();
        Vacancy::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'country' => DB::table('countries')->where('country_name',$data['country_name'])->value('id'),
            'position' => $data['position'],
            'age_from' => $data['age_from'],
            'age_to' => $data['age_to'],
            'salary_from'=>$data['salary_from'],
            'salary_to'=>$data['salary_to'],
            'education'=>$data['education'],
            'sex' => $data['sex']
        ]);
        //dd(DB::table('vacancies')->max('id'));
        foreach ($data['languages'] as $lang)
        {

            DB::table('vacancy_langs')->insert(
                ['vac_id' => DB::table('vacancies')->max('id'),
                    'lang_id' => DB::table('languages')->where('language',$lang)->value('id')]
            );
        }
        return redirect('/vacancies');
    }
}
