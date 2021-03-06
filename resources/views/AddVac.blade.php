@extends('layouts.app')

@section('content')
    <!--Adding form-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить вакансию</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/vacancies/add') }}">
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
                                    <!-- <textarea class="form-control" rows="5" id="description" name="description"></textarea> -->
                                    <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="country_name" class="col-md-4 control-label">Страна</label>

                                <div class="col-md-6">

                                    <select data-placeholder="Выберите страну..." class="chosen-select" style="width:350px;" id="country_name" name="country_name">
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
                                <label for="salary_from" class="col-md-4 control-label">Зарплата от</label>

                                <div class="col-md-6">
                                    <input id="salary_from" type="text" class="form-control" name="salary_from">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="salary_to" class="col-md-4 control-label">Зарплата до</label>

                                <div class="col-md-6">
                                    <input id="salary_to" type="text" class="form-control" name="salary_to">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="education" class="col-md-4 control-label">Образование</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="sex" name="education">

                                        <option value="неполное высшее образование"> неполное высшее образование  </option>
                                        <option value="базовое высшее образование"> базовое высшее образование  </option>
                                        <option value="полное высшее образование"> полное высшее образование</option>
                                        <option value="полное среднее образование"> полное среднее образование</option>
                                        <option value="неполное среднее образование"> неполное среднее образование</option>
                                        <option value="среднее специальное образование"> среднее специальное образование</option>


                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="languages" class="col-md-4 control-label">Знание языков</label>

                                <div class="col-md-6">
                                    <!--<select multiple class="form-control" id="languages" name="languages[] ">-->
                                    <select data-placeholder="Выберите языки..." id="language" name="languages[]" class="chosen-select" multiple >
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

@endsection