<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Vacancy;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd
        $itemsInTable=DB::table('vacancies')->count();
        if($itemsInTable > 3)
        {
            //get 20% of whole table
            $data=[
                'vacancies'=>DB::select('SELECT * FROM vacancies ORDER BY RAND() LIMIT 3;'),
                ];
        }
        else{$data=null;}
        return view('front.index',$data);
    }
}
