@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        Somewhere here should be admin's dashboard
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Adding form-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Добавить вакансию</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/dashboard') }}">
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
                                    <input id="description" type="text" class="form-control" name="description">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="country" class="col-md-4 control-label">Страна</label>

                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control" name="country">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="position" class="col-md-4 control-label">Специальность</label>

                                <div class="col-md-6">
                                    <input id="position" type="text" class="form-control" name="position">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="languages" class="col-md-4 control-label">Знание языков</label>

                                <div class="col-md-6">
                                    <input id="languages" type="text" class="form-control" name="languages">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sex" class="col-md-4 control-label">Пол</label>

                                <div class="col-md-6">
                                    <input id="sex" type="text" class="form-control" name="sex">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="age" class="col-md-4 control-label">Возраст</label>

                                <div class="col-md-6">
                                    <input id="age" type="text" class="form-control" name="age">

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

    <!-- Table -->
    <div class="container">
        <h2>Вакансии</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Страна</th>
                <th>Специальность</th>
                <th>Знание языков</th>
                <th>Пол</th>
                <th>Возраст</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vacancies as $vacancy)
            <tr>
                <td>    {!! $vacancy->name !!}  </td>
                <td>    {!! $vacancy->description !!}  </td>
                <td>    {!! $vacancy->country !!}  </td>
                <td>    {!! $vacancy->position !!}  </td>
                <td>    {!! $vacancy->languages !!}  </td>
                <td>    {!! $vacancy->sex !!}  </td>
                <td>    {!! $vacancy->age !!}  </td>




            </tr>
            @endforeach
            <tr>

            </tbody>
        </table>
    </div>
@endsection
