<!DOCTYPE html>
<html>
<head>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../assets/materialize/css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="../css/style.css"  media="screen,projection"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

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

<main>

  <div class="container-fluid">
    <div class="parallax-container first">
      <div class="parallax"><img src="images/parallax1.png"></div>
      <div class="container">
        <div class="parallax-card-wrapper">
          <div class="card-panel parallax-card">
            Вы устали сидеть на месте? Готовы к переменам и хотите открыть новые, ранее недостижимые возможности?</br>
            <b>Работа за границей — то, что вам нужно!</b></br>
            Мы готовы оказать квалифицированную помощь в трудоустройстве и подготовить вас к новой главе вашей жизни.</br>
            <a class="contact-us btn waves-effect waves-light" href="../contacts">Связаться с нами</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row main-content">
      <div class="col m6 ">
        <div class="row">
          <div class="col m12">
            <div class="main-text">
              <span class="main-text-title">GWST -  сделай первый шаг к мечте!</span>
              <p>
                GWST - это компания , главной целью которой является
                комплексная помощь в вопросах трудоустройства за рубежом.
                Наша главная цель – успешное трудоустройство каждого человека
                и одновременно удовлетворение нужд наших партнеров-работодателей.
              </p>
              <p>
                Опыт успешного трудоустройства сотен людей позволяет
                нам говорить о себе как об опытной и честной компании.
                Мы не идеальны и тоже совершаем ошибки – однако мы стараемся
                с каждым клиентом быть предельно честными, стараемся стать добрым
                знакомым и хорошим советчиком для каждого нашего клиента.
              </p>
              <p>
                Мы стремимся не просто отправить человека на работу
                за рубеж, но максимально его подготовить. Мы помогаем
                человеку переучиться на более высокооплачиваемую специальность,
                выбрать правильное развитие карьеры, изучить иностранный язык,
                проводим профориентационные семинары.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col m12">
            <div class="partners-block-title">
              <span>Наши партнеры</span>
            </div>
            <div class="partners-content">
              <img src="images/partners.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="col m6">
        <div class="side-vacancy z-depth-1">
          <div class="side-vacancy-block-title">
            <span>Актуальные вакансии</span>
          </div>
          @foreach($vacancies as $vacancy)
          <div class="row side-vacancy-row">
            <div class="col m12">
              <div class="side-vacancy-title">
                <span>{{$vacancy->position}}</span>
              </div>
              <div class="side-vacancy-company">
                <span>{{$vacancy->name}}</span>
              </div>
              <div class="side-vacancy-text">
                <span>{{substr($vacancy->description,0,100)}}</span>
              </div>
              <div class="side-vacancy-more">
                <a href="/vacancies-list/{{$vacancy->id}}">Подробнее...</a>
              </div>
            </div>
          </div>
            @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="parallax-container second">
      <div class="parallax"><img src="images/parallax2.png"></div>
      <div class="parallax-second-caption">
        <div class="white-line float-left">
          Твое будущее -
        </div>
        <div class="orange-line float-right">
          в твоих руках!
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="contact-form">
      <div class="contact-form-title">
        <span>Заполните форму и мы свяжемся с вами</span>
      </div>
      <form class="">
        <div class="row">
          <div class="input-field col s12">
            <input id="name" type="text" class="validate" required>
            <label for="name">Имя</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="telephone" type="text" class="validate" required>
            <label for="telephone">Телефон</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" required>
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 submit-btn-wrapper">
            <a class="submit-btn btn waves-effect waves-light">Отправить</a>
          </div>
        </div>
        <div class="row">
          <div class="col s12 or-block">
            <span>или</span>
          </div>
        </div>
        <div class="row">
          <div class="details-link">
            <a class="" href="#">Перейти к детальной информации</a>
          </div>
        </div>
      </form>
    </div>
  </div>

</main>

<footer>
  <div class="container footer-content">
    <div class="row no-margin">
      <div class="col m2 logo-footer-wrapper">
        <img src="images/logo-footer.png" alt="" />
      </div>
      <div class="col m8 bottom-menu">
        <ul>
          <li><a href="../">Главная</a></li>
          <li><a href="#">Консалтинг</a></li>
          <li><a class="bordered" href="#">Трудоустройство</a></li>
          <li><a href="#">Образование</a></li>
          <li><a href="../contacts">Контакты</a></li>
        </ul>
      </div>
      <div class="col m2 footer-address">
        Украина, Одесса <br> ул.Льва Толстого, 20 </br>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
