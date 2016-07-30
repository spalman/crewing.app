<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">


    <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">

{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body >

<header class="white">
    <div class="container">
        <div class="row">
            <div class="col m4 logo-wrapper">
                <img src="../images/logo-header.png" alt="" />
            </div>
            <div class="col m8 top-menu">
                <ul>
                    <li><a href="../">Главная</a></li>
                    <li><a href="../consulting">Консалтинг</a></li>
                    <li><a class="bordered" href="../vacancies-list">Трудоустройство</a></li>
                    <li><a href="../education">Образование</a></li>
                    <li><a href="../contacts">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main class="contact-main">

@yield('content')

</main>

<footer>
  <div class="container footer-content">
    <div class="row">
      <div class="col m2 logo-footer-wrapper">
        <img src="../images/logo-footer.png" alt="" />
      </div>
      <div class="col m8 bottom-menu">
        <ul>
          <li><a href="../">Главная</a></li>
          <li><a href="#">Консалтинг</a></li>
          <li><a class="bordered" href="../vacancies-list">Трудоустройство</a></li>
          <li><a href="#">Образование</a></li>
          <li><a href="../">Контакты</a></li>
        </ul>
      </div>
      <div class="col m2 footer-address">
        Украина, Одесса ул.Льва Толстого, 20 </br>
        +38 (098) 006-77-31 </br>
        +38 (050) 786-25-55 </br>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
      <div class="container">
      © 2016  GWST 2016, все права защищены
      <span class="float-right">Designed by NorthUnicorn Web studio</span>
      </div>
    </div>
</footer>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>


<script src="../assets/materialize/js/materialize.min.js" type="text/javascript"></script>
<script src="../js/script.js" type="text/javascript"></script>


{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
