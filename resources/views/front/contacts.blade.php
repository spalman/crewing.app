@extends('layouts.front_app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col m12">
      <div class="page-title">
        <span>Контакты</span>
      </div>
      <div class="breadcrumbs">
        <ul>
          <li><a href="../">Главная</a></li>
          <li>Контакты</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col m2">
      <div class="contact-col">
        <div class="title">
          Время работы
        </div>
        <div class="content">
          пн-пт: 09:00 – 18:00 </br>
          сб — выходной, </br>
          вс — выходной </br>
        </div>
      </div>
    </div>
    <div class="col m2">
      <div class="contact-col">
        <div class="title">
          Адрес
        </div>
        <div class="content">
          Украина, Одесса </br>
          ул.Льва Толстого, 20
        </div>
      </div>
    </div>
    <div class="col m2">
      <div class="contact-col">
        <div class="title">
          Телефоны
        </div>
        <div class="content">
          +38 (098) 006-77-31 </br>
          +38 (050) 786-25-55
        </div>
      </div>
    </div>
    <div class="col m2">
      <div class="contact-col">
        <div class="title">
          Почта
        </div>
        <div class="content">
          example@gmail.com
        </div>
      </div>
    </div>
    <div class="col m4">
      <div class="contact-col">
        <div class="button-wrapper">
          <a class="contact-page-btn btn waves-effect waves-light" href="#">Обратный звонок</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row no-margin">
    <div class="col m12">
      <div class="map-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.417415345028!2d30.723172841525564!3d46.48004653839087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c631921c1b1ed5%3A0x3c12f9ab8150783!2z0LLRg9C70LjRhtGPINCb0YzQstCwINCi0L7Qu9GB0YLQvtCz0L4sIDIwLCDQntC00LXRgdCwLCDQntC00LXRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1468440089135" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>


@endsection
