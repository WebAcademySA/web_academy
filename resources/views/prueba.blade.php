<?php

        echo "insertando un nuevo usuario";

        DB::table('docentes')->insert($iddocen = array(
                'iddocente' => 12345,
                'primer_nombre' => 'Alex',
                'segundo_nombre' => 'Dario',
                'primer_apellido' => 'Salgado',
                'segundo_apellido' => 'Montealegre',
                'titulo' => 'Ingeniero',
                'nivel' => 10,
                'sexo' => 'Masculino',
                'email' => 'alex@gmail.com',
                'telefono' => 1234521,
                'direccion' => 'monteria',
                'estado' => 1
        ));

        DB::table('users')->insert(array(
                array(
                        'id' => 12345,
                        'usuario' => 'alex',
                        'password' => bcrypt('admin')
                   )
        ));