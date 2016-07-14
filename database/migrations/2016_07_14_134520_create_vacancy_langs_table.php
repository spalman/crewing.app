<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancyLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_langs', function (Blueprint $table) {
            $table->integer('vac_id')->unsigned();
            $table->integer('lang_id')->unsigned();
            $table->primary(['vac_id','lang_id']);
            $table->foreign('vac_id')->references('id')->on('vacancies');
            $table->foreign('lang_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vacancy_langs');
    }
}
