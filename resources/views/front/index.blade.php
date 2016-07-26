@extends('layouts.front_app')

@section('content')




      <main>

        <div class="container-fluid">
          <div class="parallax-container first">
            <div class="parallax"><img src="../images/parallax1.png"></div>
            <div class="container">
              <div class="parallax-card-wrapper">
                <div class="card-panel parallax-card">
                  Вы устали сидеть на месте? Готовы к переменам и хотите открыть новые, ранее недостижимые возможности?</br>
                  <b>Работа за границей — то, что вам нужно!</b></br>
                  Мы готовы оказать квалифицированную помощь в трудоустройстве и подготовить вас к новой главе вашей жизни.</br>
                  <a class="contact-us btn waves-effect waves-light" href="#">Связаться с нами</a>
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
                <div class="row side-vacancy-row">
                  <div class="col m12">
                    <div class="side-vacancy-title">
                      <span>Торговый представитель</span>
                    </div>
                    <div class="side-vacancy-company">
                      <span>Киевская Кондитерская Компания</span>
                    </div>
                    <div class="side-vacancy-text">
                      <span>Oфициальный дистрибьютор ТМ "ROSHEN" объявляет набор на вакансию Торгового представителя.</span>
                    </div>
                    <div class="side-vacancy-more">
                      <a href="#">Подробнее...</a>
                    </div>
                  </div>
                </div>
                <div class="row side-vacancy-row">
                  <div class="col m12">
                    <div class="side-vacancy-title">
                      <span>Торговый представитель</span>
                    </div>
                    <div class="side-vacancy-company">
                      <span>Киевская Кондитерская Компания</span>
                    </div>
                    <div class="side-vacancy-text">
                      <span>Oфициальный дистрибьютор ТМ "ROSHEN" объявляет набор на вакансию Торгового представителя.</span>
                    </div>
                    <div class="side-vacancy-more">
                      <a href="#">Подробнее...</a>
                    </div>
                  </div>
                </div>
                <div class="row side-vacancy-row">
                  <div class="col m12">
                    <div class="side-vacancy-title">
                      <span>Торговый представитель</span>
                    </div>
                    <div class="side-vacancy-company">
                      <span>Киевская Кондитерская Компания</span>
                    </div>
                    <div class="side-vacancy-text">
                      <span>Oфициальный дистрибьютор ТМ "ROSHEN" объявляет набор на вакансию Торгового представителя.</span>
                    </div>
                    <div class="side-vacancy-more">
                      <a href="#">Подробнее...</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="parallax-container second">
            <div class="parallax"><img src="../images/parallax2.png"></div>
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


  @endsection
