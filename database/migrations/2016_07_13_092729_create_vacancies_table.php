<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->text('description');
            $table->string('country',50);
            $table->string('position',100);
            $table->string('languages');
            //$table->enum('sex',['Мужчина','Женщина','Все']);
            $table->string('sex',50);
            $table->integer('age')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vacancies');
    }
}
