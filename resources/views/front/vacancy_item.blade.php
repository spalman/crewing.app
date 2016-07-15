@extends('layouts.front_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m12">
                <div class="back-btn">
                    <a href="#"><span class="rotate-arrow">➤</span>Назад</a>
                </div>
            </div>
            <div class="col m12">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Трудоустройство</a></li>
                        <li><a href="#">Соискателям</a></li>
                        <li><a href="#">Наши вакансии</a></li>
                        <li>{{$vacancies[0]->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row no-margin">
            <div class="col m9">
                <div class="vacancy-item">
                    <div class="title">
                        {{$vacancies[0]->name}}
                    </div>
                    <div class="place">
                        Киевская кондитерская компания
                    </div>
                    <div class="table-prop z-depth-1">
                        <div class="row no-margin">
                            <div class="col m6">
                                <div class="row no-margin">
                                    <div class="col m6">
                                        <div class="point">
                                            Страна:
                                        </div>
                                        <div class="point">
                                            Зарплата:
                                        </div>
                                        <div class="point">
                                            Образование:
                                        </div>
                                        <div class="point">
                                            Язык:
                                        </div>
                                    </div>
                                    <div class="col m6">
                                        <div class="number">
                                            {{ DB::table('countries')->where('id',$vacancies[0]->country)->value('country_name') }}
                                        </div>
                                        <div class="number">
                                            {!! $vacancies[0]->salary_from !!} - {{$vacancies[0]->salary_to}}
                                        </div>
                                        <div class="number">
                                            {{$vacancies[0]->education}}
                                        </div>
                                        <div class="number">
                                            @foreach($vac_lang as $lang)
                                                {!! DB::table('languages')->where('id',$lang->lang_id)->value('language') !!}
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m6">
                                <div class="row no-margin">
                                    <div class="col m6">
                                        <div class="point">
                                            Пол:
                                        </div>
                                        <div class="point">
                                            Возраст:
                                        </div>
                                        <div class="point">
                                            Контактное лицо:
                                        </div>
                                        <div class="point">
                                            Телефон:
                                        </div>
                                    </div>
                                    <div class="col m6">
                                        <div class="number">
                                            {{$vacancies[0]->sex}}
                                        </div>
                                        <div class="number">
                                            {!! $vacancies[0]->age_from !!} - {!! $vacancies[0]->age_to !!}
                                        </div>
                                        <div class="number">
                                            Евгений
                                        </div>
                                        <div class="number">
                                            (093) 234 - 23 - 23
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        {{$vacancies[0]->description}}
                    </div>
                    <div class="send-letter">
                        <a class="vacancy-page-btn btn waves-effect waves-light" href="#">Отправить резюме</a>
                    </div>
                </div>
            </div>
            <div class="col m3">
                <p>

                </p>
            </div>
        </div>
    </div>
@endsection