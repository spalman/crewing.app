<?php

namespace App\Http\Controllers;

use App\Country;
use App\Language;
use Illuminate\Http\Request;
use App\Vacancy;
use App\Vacancy_lang;
use App\Http\Requests;
use DB;

class VacanciesListController extends Controller
{
    public function index()
    {
        $type = DB::select(DB::raw('SHOW COLUMNS FROM vacancies WHERE Field = "education"'))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $values = array();
        foreach(explode(',', $matches[1]) as $value){
            $values[] = trim($value, "'");
        }
        $data=[
            'vacancies'=>Vacancy::latest()->paginate(5),
            'vac_lang'=>Vacancy_lang::all(),
            'countries'=>Country::all(),
            'educations'=>$values,
            'languages'=>Language::all()
        ];
        //dd($data);
        return view('front.item_list',$data);
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
