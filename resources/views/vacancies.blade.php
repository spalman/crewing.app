@extends('layouts.app')

@section('content')


   <!--Spoiler button-->
   <div class="col-md-6">
   <button class="btn btn-default" data-toggle="collapse" data-target="#hide-me">Добавить вакансию</button>
    <div id="hide-me" class="collapse ">

    <!--Adding form-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить вакансию</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/vacancies') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Название</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Описание</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="country_name" class="col-md-4 control-label">Страна</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="country_name" name="country_name">
                                       @foreach($countries as $country)
                                            <option value="{{$country->country_name}}">  {{$country->country_name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="position" class="col-md-4 control-label">Специальность</label>

                                <div class="col-md-6">
                                    <input id="position" type="text" class="form-control" name="position">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="languages" class="col-md-4 control-label">Знание языков</label>

                                <div class="col-md-6">
                                    <select multiple class="form-control" id="languages" name="languages">
                                        @foreach($languages as $language)
                                            <option value="{{$language->language}}">  {{$language->language}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sex" class="col-md-4 control-label">Пол</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="sex" name="sex">
                                        <option value="Мужчина">Мужчина</option>
                                        <option value="Женщина">Женщина</option>
                                        <option value="Все">Все</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="age_from" class="col-md-4 control-label">Возраст от</label>

                                <div class="col-md-6">
                                    <input id="age_from" type="text" class="form-control" name="age_from">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="age_to" class="col-md-4 control-label">Возраст до</label>

                                <div class="col-md-6">
                                    <input id="age_to" type="text" class="form-control" name="age_to">

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Добавить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Table -->
    <div class="container">
        <h2>Вакансии</h2>
        @if( ! $vacancies->isEmpty() )
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Страна</th>
                    <th>Специальность</th>
                    <th>Знание языков</th>
                    <th>Пол</th>
                    <th>Возраст</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td>    {!! $vacancy->name !!}  </td>
                        <td>    {!! $vacancy->description !!}  </td>
                        <td>    {!! $vacancy->country !!}  </td>
                        <td>    {!! $vacancy->position !!}  </td>
                        <td>    {!! $vacancy->languages !!}  </td>
                        <td>    {!! $vacancy->sex !!}  </td>
                        <td>    {!! $vacancy->age !!}  </td>




                    </tr>
                @endforeach
                <tr>

                </tbody>
            </table>
        @else
            <h3>Вакансий нет</h3>
        @endif
    </div>
@endsection
