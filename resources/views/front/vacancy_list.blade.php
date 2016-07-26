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
                        <select id="sex" name="sex" class="browser-default">
                            <option value="" disabled selected>Выберите пол</option>
                            <option value="Мужчина">Мужчина</option>
                            <option value="Женщина">Женщина</option>
                            <option value="Все">Все</option>
                        </select>
                    </div>
                </div>
                <div class="col m4 filter-item">
                    <div class="select-field">
                        <label>Ваш возраст: </label>
                        <select id="age" class="browser-default">
                            <option value="" disabled selected>Выберите возраст</option>
                            @for ($i = 18; $i < 41; $i++)
                                <option value="{{$i}}">  {{$i}} </option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="col m4 filter-item">
                    <div class="select-field">
                        <label>Ваше образование: </label>
                        <select id="education" class="browser-default">
                            <option value="" disabled selected>Выберите ваше образование</option>
                            @foreach($educations as $education)
                                <option value="{{$education}}">  {{$education}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col m3 filter-item">
                    <div class="select-field">
                        <label>Страна: </label>
                        <select id="country" class="browser-default">
                            <option value="" disabled selected>Выберите страну</option>
                            @foreach($countries as $country)
                                <option value="{{$country->country_name}}">  {{$country->country_name}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
               <!--
               <div class="col m3 filter-item">
                    <div class="select-field">
                        <label>Специальность: </label>
                        <select id="position" class="browser-default">
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
                        <select id="salary" class="browser-default">
                            <option value="" disabled selected>Желаемая зарплата</option>
                            <option value="0-500"><500</option>
                            <option value="500-1000">500-1000</option>
                            <option value="1000-1500">1000-1500</option>
                            <option value="1500-2000">1500-2000</option>
                            <option value="2000-100000">2000+</option>
                        </select>
                    </div>
                </div>
                -->
                <div class="col m3 filter-item">
                    <div class="select-field">
                        <label>Знание языков: </label>
                        <select id="language" class="browser-default">
                        <option value="" disabled selected>Языки</option>

                            @foreach($languages as $language)
                                <option value="{{$language->language}}">  {{$language->language}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="hidden" name="name" value="{{ csrf_token() }}">
            </div>
        </div>
    </div>
</div>


<div class="container" id="vacancies_items">
    @yield('items')
</div>

@endsection
