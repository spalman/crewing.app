@extends('layouts.app')

@section('content')



        <!-- Table -->
        <div class="container">
            <h2>Вакансии</h2>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vacancies as $vacancy)
                        <tr>
                            <td>    {!! $vacancy->id !!} </td>
                            <td>    {!! $vacancy->name !!}  </td>
                            <td>    {!! $vacancy->created_at !!}   </td>

                        </tr>
                    @endforeach
                    <tr>

                    </tbody>

              </table>
    <div class="param-wrapper">
      <div class="param-title">
        Описание
      </div>
      <div class="param-content">
       {!! $vacancy->description !!}
      </div>
    </div>

    <div class="param-wrapper">
      <div class="param-title">
        Страна
      </div>
      <div class="param-content">
      {!! DB::table('countries')->where('id',$vacancy->country)->value('country_name') !!}
      </div>
    </div>

    <div class="param-wrapper">
      <div class="param-title">
        Специальность
      </div>
      <div class="param-content">
       {!! $vacancy->position !!}
      </div>
    </div>

    <div class="param-wrapper">
      <div class="param-title">
        Зарплата
      </div>
      <div class="param-content">
       {!! $vacancy->salary_from !!} - {{$vacancy->salary_to}}
      </div>
    </div>

    <div class="param-wrapper">
      <div class="param-title">
        Знание языков
      </div>
      <div class="param-content">
        <ul>
        @foreach($vac_lang as $lang)
                <li>{!! DB::table('languages')->where('id',$lang->lang_id)->value('language') !!}</li>
        @endforeach
      </ul>
      </div>
    </div>

    <div class="param-wrapper">
      <div class="param-title">
        Образование
      </div>
      <div class="param-content">
       {!! $vacancy->education !!}
      </div>
    </div>

    <div class="param-wrapper">
      <div class="param-title">
        Пол
      </div>
      <div class="param-content">
       {!! $vacancy->sex !!}
      </div>
    </div>

    <div class="param-wrapper">
      <div class="param-title">
       Возраст
      </div>
      <div class="param-content">
       {!! $vacancy->age_from !!} - {!! $vacancy->age_to !!}
      </div>
    </div>
        </div>
@endsection
