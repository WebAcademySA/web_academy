<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlumnoTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();

        $count = 0;

        for($i = 1; $i < 12; $i ++){

            for($li = 1; $li < 5 ; $li ++){
                $count = ($count + 1);
                \DB::table('cursos')->insert($idcurs = array(
                    'idcurso' => $count,
                    'grado' => $i,
                    'grupo' => $li,
                    'aula' => $faker->numberBetween($min = 100, $max = 300)
                ));
            }

         /*   \DB::table('curso')->insert($idcurs = array(
                'idcurso' => $faker->numberBetween($min=1, $max=50),
                'grado' => $faker->numberBetween($min = 1, $max = 11),
                'grupo' => $faker->numberBetween($min = 1, $max = 4),
                'aula' => $faker->numberBetween($min = 100, $max = 300)
            )); */

        }
    }
}