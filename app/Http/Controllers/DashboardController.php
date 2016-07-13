<?php

namespace App\Http\Controllers;

use App\Vacancy;
use App\Http\Requests;
//use Illuminate\Http\Request;
use Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
        'vacancies'=>Vacancy::all()
        ];
        return view('dashboard',$data);
    }
    
    // Create new vacancy in database
    public  function  create()
    {
           $data = Request::all();
            Vacancy::create([
               'name' => $data['name'],
               'description' => $data['description'],
               'country' => $data['country'],
               'position' => $data['position'],
               'languages' => $data['languages'],
               'sex' => $data['sex'],
               'age' => $data['age'],
           ]);
        return redirect('/dashboard');
    }
}
