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
        return view('vacancy_page',$data);
    }

    public  function editVacButtonHandler($id)
        {
          //  dd(Request::all());
            $input=Request::all();
            var_dump($input);
            $type = DB::select(DB::raw('SHOW COLUMNS FROM vacancies WHERE Field = "education"'))[0]->Type;
            preg_match('/^enum\((.*)\)$/', $type, $matches);
            $values = array();
            foreach(explode(',', $matches[1]) as $value){
                $values[] = trim($value, "'");
            }
            if(isset($input['edit']))
            {
                $data=[
                    'vac'=>DB::table('vacancies')->where('id',$id)->get(),
                    'countries'=>Country::all(),
                    'languages'=>Language::all(),
                    'educations'=>$values,
                    'vac_lang'=>DB::table('vacancy_langs')->where('vac_id',$id)->get()
                ];
              //  dd($data);
                return view('EditVac',$data);
            }
            elseif (isset($input['delete']))
            {
                DB::table('vacancies')->where('id', $id)->delete();
                return redirect('/vacancies/');
            }
            elseif (isset($input['update']))
            {
                DB::table('vacancies')
                    ->where('id',$id)
                    ->update([
                        'name' => $input['name'],
                        'description' => $input['description'],
                        'country' => DB::table('countries')->where('country_name',$input['country_name'])->value('id'),
                        'position' => $input['position'],
                        'age_from' => $input['age_from'],
                        'age_to' => $input['age_to'],
                        'salary_from'=>$input['salary_from'],
                        'salary_to'=>$input['salary_to'],
                        'education'=>$input['education'],
                        'sex' => $input['sex']
                    ]);
                DB::table('vacancy_langs')->where('vac_id',$id)->delete();
                foreach ($input['languages'] as $lang)
                {

                    DB::table('vacancy_langs')->insert(
                        ['vac_id' => DB::table('vacancies')->max('id'),
                            'lang_id' => DB::table('languages')->where('language',$lang)->value('id')]
                    );
                }
            }
            return redirect('/vacancies/');
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
