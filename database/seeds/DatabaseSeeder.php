<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker=Faker\Factory::create('ru_RU');

        $limit=50;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('vacancies')->insert([ //,
                'name' => $faker->company,
                'description' => $faker->text(100),
                'country'=>$faker->numberBetween(1,240),
                'position'=>$faker->jobTitle(),
                'sex'=>$faker->randomElement(['Мужчина','Женщина','Все']),
                'age_from'=>$faker->numberBetween(18,40),
                'age_to'=>$faker->numberBetween(20,60),
                'salary_from'=>$faker->numberBetween(100,500),
                'salary_to'=>$faker->numberBetween(500,4000),
                'education'=>$faker->randomElement(['неполное высшее образование',
                    'базовое высшее образование',
                    'полное высшее образование',
                    'полное среднее образование',
                    'неполное среднее образование',
                    'среднее специальное образование'])
            ]);
        }
    }
}
