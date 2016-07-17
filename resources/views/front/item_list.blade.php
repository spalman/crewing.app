@extends('front.vacancy_list')

@section('items')
<div class="vacancy-wrapper">
    <div class="total-vacancy">
        Всего найдено <b>1845</b> вакансий
    </div>


    @foreach($vacancies as $vacancy)
        <div class="vacancy-row">
            <div class="job">
                <a href="/vacancies-list/{{$vacancy->id}}">{{$vacancy->name}}</a>
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

    @endsection