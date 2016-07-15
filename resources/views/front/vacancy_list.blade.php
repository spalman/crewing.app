@extends('layouts.front_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m12">
            <div class="page-title">
                <span>Вакансии</span>
            </div>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Трудоустройство</a></li>
                    <li><a href="#">Соискателям</a></li>
                    <li>Наши вакансии</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid filter-block">
    <div class="container">
        <div class="filter-wrapper">
            <div class="row">
                <div class="col m4 filter-item">
                    <div class="select-field">
                        <label>Ваш пол: </label>
                        <select class="browser-default">
                            <option value="" disabled selected>Выберите пол</option>
                            <option value="1">Мужчина</option>
                            <option value="2">Женщина</option>
                            <option value="3">Не важно</option>
                        </select>
                    </div>
                </div>
                <div class="col m4 filter-item">
                    <div class="select-field">
                        <label>Ваш возраст: </label>
                        <select class="browser-default">
                            <option value="" disabled selected>Выберите возраст</option>
                            <option value="1">19-25</option>
                            <option value="2">25-30</option>
                            <option value="3">30-40</option>
                        </select>
                    </div>
                </div>
                <div class="col m4 filter-item">
                    <div class="select-field">
                        <label>Ваше образование: </label>
                        <select class="browser-default">
                            <option value="" disabled selected>Выберите возраст</option>
                            <option value="1">19-25</option>
                            <option value="2">25-30</option>
                            <option value="3">30-40</option>
                        </select>
                    </div>
                </div>
                <div class="col m3 filter-item">
                    <div class="select-field">
                        <label>Страна: </label>
                        <select class="browser-default">
                            <option value="" disabled selected>Выберите страну</option>
                            <option value="1">Мужчина</option>
                            <option value="2">Женщина</option>
                            <option value="3">Не важно</option>
                        </select>
                    </div>
                </div>
                <div class="col m3 filter-item">
                    <div class="select-field">
                        <label>Специальность: </label>
                        <select class="browser-default">
                            <option value="" disabled selected>Ваша специальность</option>
                            <option value="1">19-25</option>
                            <option value="2">25-30</option>
                            <option value="3">30-40</option>
                        </select>
                    </div>
                </div>
                <div class="col m3 filter-item">
                    <div class="select-field">
                        <label>Зарплата: </label>
                        <select class="browser-default">
                            <option value="" disabled selected>Желаемая зарплата</option>
                            <option value="1">19-25</option>
                            <option value="2">25-30</option>
                            <option value="3">30-40</option>
                        </select>
                    </div>
                </div>
                <div class="col m3 filter-item">
                    <div class="select-field">
                        <label>Знание языков: </label>
                        <select class="browser-default">
                            <option value="" disabled selected>Языки</option>
                            <option value="1">19-25</option>
                            <option value="2">25-30</option>
                            <option value="3">30-40</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="vacancy-wrapper">
        <div class="total-vacancy">
            Всего найдено <b>1845</b> вакансий
        </div>


@foreach($vacancies as $vacancy)
        <div class="vacancy-row">
            <div class="job">
                <a href="#">{{$vacancy->name}}</a>
            </div>
            <div class="properties">
                <span class="place">Киевская кондитерская компания</span>—
                <span class="country">{!! DB::table('countries')->where('id',$vacancy->country)->value('country_name') !!} </span>—
                <span class="payment"><b>{!! $vacancy->salary_from !!} - {{$vacancy->salary_to}}</b></span>
            </div>
            <div class="description">
                <span> {{$vacancy->description}}</span>
                <a href="#">➤</a>
            </div>
            <div class="line"></div>
        </div>

        @endforeach
        <div class="text-center">
            {{$vacancies->render()}}
        </div>
    </div>
</div>

@endsection