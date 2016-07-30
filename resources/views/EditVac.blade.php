@extends('layouts.app')

@section('content')
    <!--Adding form-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить вакансию</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/vacancies/edit/{{$vac[0]->id}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Название</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $vac[0]->name }}">


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Описание</label>

                                <div class="col-md-6">
                                    <!-- <textarea class="form-control" rows="5" id="description" name="description"></textarea> -->
                                    <textarea class="form-control" rows="5" id="description" name="description" >{{$vac[0]->description}} </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="country_name" class="col-md-4 control-label">Страна</label>

                                <div class="col-md-6">

                                    <select data-placeholder="Выберите страну..." class="chosen-select" style="width:350px;" id="country_name" name="country_name">
                                        @foreach($countries as $country)
                                            <option @if ($vac[0]->country==$country->id) selected @endif value="{{$country->country_name}}">  {{$country->country_name}} </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="position" class="col-md-4 control-label">Специальность</label>

                                <div class="col-md-6">
                                    <input id="position" type="text" class="form-control" name="position" value="{{$vac[0]->position}}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="salary_from" class="col-md-4 control-label">Зарплата от</label>

                                <div class="col-md-6">
                                    <input id="salary_from" type="text" class="form-control" name="salary_from" value="{{$vac[0]->salary_from}}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="salary_to" class="col-md-4 control-label">Зарплата до</label>

                                <div class="col-md-6">
                                    <input id="salary_to" type="text" class="form-control" name="salary_to" value="{{$vac[0]->salary_to}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="education" class="col-md-4 control-label">Образование</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="sex" name="education">

                                        @foreach($educations as $education)
                                            <option @if ($vac[0]->education==$education) selected @endif  value="{{$education}}">  {{$education}} </option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="languages" class="col-md-4 control-label">Знание языков</label>

                                <div class="col-md-6">
                                    <!--<select multiple class="form-control" id="languages" name="languages[] ">-->
                                    <select data-placeholder="Выберите языки..." id="language" name="languages[]" class="chosen-select" multiple >
                                        @foreach($languages as $language)
                                            <option
                                                    @foreach($vac_lang as $vl)   @if ($vl->lang_id==$language->id) selected @endif @endforeach value="{{$language->language}}">  {{$language->language}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sex" class="col-md-4 control-label">Пол</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="sex" name="sex">
                                        <option @if($vac[0]->sex=="Мужчина") selected @endif value="Мужчина">Мужчина</option>
                                        <option @if($vac[0]->sex=="Женщина") selected @endif value="Женщина">Женщина</option>
                                        <option @if($vac[0]->sex=="Все") selected @endif value="Все">Все</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="age_from" class="col-md-4 control-label">Возраст от</label>

                                <div class="col-md-6">
                                    <input id="age_from" type="text" class="form-control" name="age_from" value="{{$vac[0]->age_from}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="age_to" class="col-md-4 control-label">Возраст до</label>

                                <div class="col-md-6">
                                    <input id="age_to" type="text" class="form-control" name="age_to" value="{{$vac[0]->age_to}}">

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" name="update" value="update">
                                         Редактировать
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

@endsection