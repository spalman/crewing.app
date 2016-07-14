<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSalaryEducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacancies', function ($table) {

            $table->integer('salary_from')->unsigned();
            $table->integer('salary_to')->unsigned()->nullable();
            $table->enum('education', ['неполное высшее образование',
                'базовое высшее образование',
                'полное высшее образование',
                'полное среднее образование',
                'неполное среднее образование',
                'среднее специальное образование']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacancies', function ($table) {
            $table->dropColumn('salary_from');
            $table->dropColumn('salary_to');
            $table->dropColumn('education');
        });
    }
}
