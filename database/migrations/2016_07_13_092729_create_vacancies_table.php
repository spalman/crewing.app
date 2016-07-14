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
            $table->text('description')->nullable();
            $table->integer('country_id')->unsigned();
            $table->string('position',100);
            $table->enum('sex',['Мужчина','Женщина','Все']);
            $table->integer('age_from')->unsigned();
            $table->integer('age_to')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->in('countries');
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
