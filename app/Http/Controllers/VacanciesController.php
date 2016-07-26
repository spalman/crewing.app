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
            'vacancies'=>Vacancy::latest()->paginate(20),
            'countries'=>Country::all(),
            'languages'=>Language::all(),
            'vac_lang'=>Vacancy_lang::all()
        ];
        return view('vacancies',$data);
    }
    



    public  function showVac($id)
    {
        $data=[
            'vacancies'=>DB::table('vacancies')->where('id',$id)->get(),
            //'vac_lang'=>Vacancy_lang::all()
            'vac_lang'=>DB::table('vacancy_langs')->where('vac_id',$id)->get()
        ];
        //dd($data);
        return view('vacancy_page',$data);
    }
    public function sorter()
    {
        $input = Request::all();
        switch ($input['sort']){
            case "newest":
                $data=[
                    'vacancies'=>Vacancy::latest()->paginate(20),
                    'countries'=>Country::all(),
                    'languages'=>Language::all(),
                    'vac_lang'=>Vacancy_lang::all()
                ];
                break;
            case "oldest":
                $data=[
                    'vacancies'=>Vacancy::oldest()->paginate(20),
                    'countries'=>Country::all(),
                    'languages'=>Language::all(),
                    'vac_lang'=>Vacancy_lang::all()
                ];
                break;
            case "name":
                $data=[
                    'vacancies'=>DB::table('vacancies')
                        ->orderBy('name', 'asc')->paginate(20),
                    'countries'=>Country::all(),
                    'languages'=>Language::all(),
                    'vac_lang'=>Vacancy_lang::all()
                ];
                break;
        }
        return view('vacancies',$data);


    }
}
