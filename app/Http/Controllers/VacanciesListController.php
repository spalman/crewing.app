<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;
use App\Vacancy_lang;
use App\Http\Requests;
use DB;

class VacanciesListController extends Controller
{
    public function index()
    {
        $data=[
            'vacancies'=>Vacancy::latest()->paginate(5),
            'vac_lang'=>Vacancy_lang::all()
        ];
        return view('front.vacancy_list',$data);
    }

    public function showVac($id)
    {
        $data=[
            'vacancies'=>DB::table('vacancies')->where('id',$id)->get(),
            'vac_lang'=>DB::table('vacancy_langs')->where('vac_id',$id)->get()
        ];
        //dd($data);
        return view('front.vacancy_item',$data);
    }
}
