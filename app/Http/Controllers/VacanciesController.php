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
            'languages'=>Language::all()
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
            'sex' => $data['sex'],
            'age_from' => $data['age_from'],
            'age_to' => $data['age_to']
        ]);
        return redirect('/vacancies');
    }
}
