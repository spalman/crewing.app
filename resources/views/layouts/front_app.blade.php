<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/chosen/chosen.css">
    <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<!--Talbe sort plugin-->
    <script type="text/javascript" src="jquery-latest.js"></script>
    <script type="text/javascript" src="jquery.tablesorter.js"></script>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body >

<header class="white">
    <div class="container">
        <div class="row">
            <div class="col m4 logo-wrapper">
                <img src="images/logo-header.png" alt="" />
            </div>
            <div class="col m8 top-menu">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Консалтинг</a></li>
                    <li><a class="bordered" href="#">Трудоустройство</a></li>
                    <li><a href="#">Образование</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main class="contact-main">

@yield('content')

</main>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="../assets/chosen/chosen.jquery.js" type="text/javascript"></script>
<script src="../assets/materialize/js/materialize.min.js" type="text/javascript"></script>
<script src="../js/script.js" type="text/javascript"></script>
<script type="text/javascript">
    var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
        '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>

{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
