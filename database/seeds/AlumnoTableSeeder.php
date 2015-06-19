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

        for($i = 0; $i < 15; $i ++){

           \DB::table('alumno')->insert($idalum = array(
                'nid' => $faker->unique()->numberBetween($min = 2000, $max = 20000),
                'primer_nombre' => $faker->firstName(),
                'segundo_nombre' => $faker->firstName(),
                'primer_apellido' => $faker->lastName(),
                'segundo_apellido' => $faker->lastName(),
                'telefono' => $faker->numberBetween($min = 1000, $max = 10000),
                'sexo' => $faker->randomElement($array = array('M','F')),
                'direccion' => $faker->randomElement($array = array('monteria','bogota')),
                'estado' => $faker->randomElement($array = array(1,0))
            ));


            \DB::table('curso')->insert($idcurs = array(
                'grado' => $faker->unique()->numberBetween($min = 1, $max = 20),
                'aula' => $faker->numberBetween($min = 100, $max = 300)
            ));


           \DB::table('matricula')->insert($idmatri = array(
               'idcursofor' => $idcurs["grado"],
               'idalumnofor' => $idalum["nid"],
               'estadomatricula' => $faker->randomElement($array = array(1,0))
            ));

            \DB::table('asignatura')->insert($idasig = array(
                'idasignatura' => $faker->unique()->numberBetween($min = 10, $max = 50),
                'nombreasig' => $faker->city,
                'estadoasig' => $faker->randomElement($array = array(1,0))
            ));

            \DB::table('inscrito')->insert($idins = array(
                'idinscrito' => $faker->unique()->numberBetween($min = 30, $max = 80),
                'idestuinscritofor' => $idalum["nid"],
                'idasiginscritofor' => $idasig["idasignatura"],
                'horainicio' => $faker->time($format = 'H:i:s', $max = '150000'),
                'horafin' => $faker->time($format = 'H:i:s', $max = '150000')
            ));

            \DB::table('notas')->insert(array(
                'idnotas' => $faker->unique()->numberBetween($min = 20, $max = 70),
                'idinsnotasfor' => $idins["idinscrito"],
                'calificacion' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 5),
                'Periodo' => $faker->randomElement($array = array(1,2,3,4))
            ));

            \DB::table('docente')->insert($iddocen = array(
                'iddocente' => $faker->unique()->numberBetween($min = 3000, $max = 20000),
                'primer_nombre' => $faker->firstName(),
                'segundo_nombre' => $faker->firstName(),
                'primer_apellido' => $faker->lastName(),
                'segundo_apellido' => $faker->lastName(),
                'titulo' => $faker->randomElement($array = array('licenciado','magister')),
                'nivel' => $faker->randomElement($array = array(1,2,3,4,5,6,7,8,9,10)),
                'sexo' => $faker->randomElement($array = array('M','F')),
                'email' => $faker->email,
                'telefono' => $faker->numberBetween($min = 1000, $max = 10000),
                'direccion' => $faker->randomElement($array = array('monteria','bogota')),
                'estado' => $faker->randomElement($array = array(1,0))
            ));

            \DB::table('imparte')->insert(array(
                'idimparte' => $faker->unique()->numberBetween($min =30, $max = 80),
                'idasigimpartefor' => $idasig["idasignatura"],
                'iddoceimpartefor' => $iddocen["iddocente"],
                'estadoimparte' => $faker->randomElement($array = array(1,0))
            ));

            \DB::table('usuario')->insert(array(
                'idusuario' => $iddocen["iddocente"],
                'contrasenia' => $faker->randomElement($array = array('usuario2015','eragoldeyepes'))
            ));
        }
    }
}