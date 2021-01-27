<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $datos = [
        	[

        	'nombre' => 'Forsage',
        	'created_at' => now()

        	],
        	[

        	'nombre' => 'IncomeMatrix',
        	'created_at' => now()

        	],
        	[

        	'nombre' => 'Otro',
        	'created_at' => now()

        	]
        	

        ];

         foreach ($datos as $key) {
            DB::table('contratos')->insert($key);
        }


        $datos = [
        	[

        	'nro' => '1',
        	'created_at' => now()

        	],
        	[

        	'nro' => '2',
        	'created_at' => now()

        	],
        	[

        	'nro' => '3',
        	'created_at' => now()

        	]
        	

        ];

         foreach ($datos as $key) {
            DB::table('bloques')->insert($key);
        }

          $datos = [
        	[

        	'persona_id' => '1',
			'id_registro' => '2021',
			'upline_id' => '0',
			'fecha_registro' => '2020/06/05',
			'bloque_id' => '1',
        	'created_at' => now()

        	],
        	[

        	'persona_id' => '2',
			'id_registro' => '48114',
			'upline_id' => '2021',
			'fecha_registro' => '2020/11/2',
			'bloque_id' => '1',
        	'created_at' => now()

        	]
        	

        ];

         foreach ($datos as $key) {
            DB::table('participantes_forsage')->insert($key);
        }

        $datos = [
            [

            'primer_nombre' => 'Ivan',
            'primer_apellido' => 'Alvarez',
            'pais' => 'España',
            'created_at' => now()

            ],
            [

            'primer_nombre' => 'Gladiangel',
            'primer_apellido' => 'Meneses',
            'pais' => 'Venezuela',
            'created_at' => now()

            ],
            [

            'primer_nombre' => 'Lisbeth',
            'primer_apellido' => 'Espinoza',
            'pais' => 'Venezuela',
            'created_at' => now()

            ],
            [

            'primer_nombre' => 'Angel',
            'primer_apellido' => 'Meneses',
            'pais' => 'Venezuela',
            'created_at' => now()

            ]
            

        ];

         foreach ($datos as $key) {
            DB::table('personas')->insert($key);
        }
    }
}
