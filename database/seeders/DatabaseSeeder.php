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
    }
}
