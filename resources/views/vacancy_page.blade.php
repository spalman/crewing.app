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
                        <th>Описание</th>
                        <th>Страна</th>
                        <th>Специальность</th>
                        <th>Зарплата</th>
                        <th>Знание языков</th>
                        <th>Образование</th>
                        <th>Пол</th>
                        <th>Возраст</th>
                        <th>Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vacancies as $vacancy)
                        <tr>
                            <td>    {!! $vacancy->id !!} </td>
                            <td>    {!! $vacancy->name !!}  </td>
                            <td>    {!! $vacancy->description !!}  </td>
                            <td>    {!! DB::table('countries')->where('id',$vacancy->country)->value('country_name') !!}  </td>
                            <td>    {!! $vacancy->position !!}  </td>
                            <td>    {!! $vacancy->salary_from !!} - {{$vacancy->salary_to}} </td>

                            <td>
                                @foreach($vac_lang as $lang)
                                        {!! DB::table('languages')->where('id',$lang->lang_id)->value('language') !!}
                                @endforeach
                            </td>

                            <td>    {!! $vacancy->education !!}  </td>
                            <td>    {!! $vacancy->sex !!}  </td>
                            <td>    {!! $vacancy->age_from !!} - {!! $vacancy->age_to !!}  </td>
                            <td>    {!! $vacancy->created_at !!}   </td>

                        </tr>
                    @endforeach
                    <tr>

                    </tbody>
                </table>

        </div>
@endsection
