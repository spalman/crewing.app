<?php

namespace App\Http\Controllers;

use App\Country;
use App\Language;
//use Illuminate\Http\Request;
use App\Vacancy;
use App\Vacancy_lang;
//use App\Http\Requests;
use Request;
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
            'vacancies'=>Vacancy::latest()->get(),//->paginate(5),
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

    public function filter()
    {
        $params=Request::all();

        //dd((array)$params['language']);
        if(empty($params['sex'])) {$sex='%';} else {$sex=$params['sex'];}
        if(empty($params['country'])) {$country='%';} else {$country=DB::table('countries')->where('country_name',$params['country'])->value('id');}
        if(empty($params['age'])) {$age[0]=100; $age[1]=0;} else {$age=explode("-",$params['age']);}
        if(empty($params['salary'])) {$salary[0]=10000; $salary[1]=0;} else {$salary=explode("-",$params['salary']);}
        if(empty($params['education'])) {$education='%'; } else {$education=$params['education'];}
        if(empty($params['language']))
            {
                $ids=DB::table('vacancies')->get(array('id'));
                for($i=0; $i<count($ids);$i++)
                {
                    $ids[$i]=$ids[$i]->id;
                }
            }
                else
                    {
                        $paramLangs=DB::table('languages')
                            ->whereIn('language',(array)$params['language'])
                            ->get(array('id'));
                        for($i=0; $i<count($paramLangs);$i++)
                        {
                            $paramLangs[$i]=$paramLangs[$i]->id;
                        }
                        $ids=DB::table('vacancy_langs')
                                ->whereIn('lang_id',$paramLangs)
                                ->get(array('vac_id'));
                        for($i=0; $i<count($ids);$i++)
                        {
                            $ids[$i]=$ids[$i]->vac_id;
                        }

                    }
//var_dump($salary);
          $data=[
              'vacancies'=>DB::table('vacancies')
                                ->whereIn('id',$ids)
                                ->where('sex','like',$sex)
                                ->where('country','like',$country)
                                ->where('age_from','<=',intval($age[0]))
                                ->where('age_to','>=',intval($age[1]))
                                //->where('salary_from','<=',intval($salary[0]))
                                //->where('salary_to','>=',intval($salary[1]))
                                ->where('salary_from','<=',$salary[0])
                                ->where('salary_to','>=',$salary[1])
                                ->where('education','like',$education)
                                ->latest()
                                ->get()

                ];
        return view('front.items',$data);

      }

    }
