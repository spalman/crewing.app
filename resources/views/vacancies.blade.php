@extends('layouts.app')

@section('content')






       <!--Filtering form-->

       <div class="container">
           <form class="form-inline" role="form" method="POST" action="{{ url('/vacancies') }}">
               {{ csrf_field() }}

               <div class="form-group">

                   <select class="form-control" id="sort" name="sort">

                       <option value="newest"> от новых к старым  </option>
                       <option value="oldest"> от старых к новым </option>
                       <option value="name"> по названию  </option>

                   </select>

                        <button type="submit" class="btn btn-default">Sort!</button>

                </div>
            </form>
       </div>



    <!-- Table -->
    <div class="container">
        <h2>Вакансии</h2>
        @if( ! $vacancies->isEmpty() )
            <table class="tablesorter" id="vacancies_table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <!--<th>Описание</th>-->
                    <!-- <th>Страна</th> -->
                    <!-- <th>Специальность</th> -->
                    <th>Зарплата</th>
                    <th>Знание языков</th>
                    <th>Образование</th>
                    <!-- <th>Пол</th> -->
                    <!-- <th>Возраст</th> -->
                    <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td>  {!! $vacancy->id !!}   <a href="#" class="inf-btn" onclick="location.href='/vacancies/{{$vacancy->id}}'">Info</a>    </td>
                        <td>    {!! $vacancy->name !!}  </td>
                        <!--<td>    {!! $vacancy->description !!}  </td>-->
                        <!-- <td>    {!! DB::table('countries')->where('id',$vacancy->country)->value('country_name') !!}  </td> -->
                        <!-- <td>    {!! $vacancy->position !!}  </td> -->
                        <td>    {!! $vacancy->salary_from !!} - {{$vacancy->salary_to}} </td>

                        <td>
                            @foreach($vac_lang as $lang)
                                @if($lang->vac_id===$vacancy->id)
                                    {!! DB::table('languages')->where('id',$lang->lang_id)->value('language') !!}
                                @endif
                            @endforeach
                        </td>

                        <td>    {!! $vacancy->education !!}  </td>
                        <!-- <td>    {!! $vacancy->sex !!}  </td> -->
                        <!-- <td>    {!! $vacancy->age_from !!} - {!! $vacancy->age_to !!}  </td> -->
                        <td>    {!! $vacancy->created_at !!}   </td>
                    </tr>
                @endforeach
                <tr>

                </tbody>
            </table>
            <div class="text-center">
                {{$vacancies->render()}}
            </div>
        @else
            <h3>Вакансий нет</h3>
        @endif
    </div>
@endsection
