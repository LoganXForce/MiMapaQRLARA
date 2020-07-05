<?php

use Illuminate\Database\Seeder;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinos') ->insert([
            [
                'nombre' => 'Playa del Carmen',
                'descripccion' => 'Playa del Carmen es un balneario costero de México que se ubica a lo largo de la costa caribeña de la Riviera Maya, en la Península de Yucatán. Pertenece al estado de Quintana Roo y es famosa por sus playas bordeadas de palmeras y los arrecifes de coral. La Quinta Avenida peatonal se extiende en paralelo a la playa, con cuadras de tiendas',
                'latitud' => '20.6222200',
                'longitud' => '-87.0694400',
                'giro' => 'Destino Turistico' ,
                'link' => 'google.com' ,
                'imagen' => null,
                'galeria1' => null,
                'galeria2' => null,
                'galeria3' => null,
                'galeria4' => null,
            ],
            [
                'nombre' => 'Puerto Morelos',
                'descripccion' => 'Playa del Carmen es un balneario costero de México que se ubica a lo largo de la costa caribeña de la Riviera Maya, en la Península de Yucatán. Pertenece al estado de Quintana Roo y es famosa por sus playas bordeadas de palmeras y los arrecifes de coral. La Quinta Avenida peatonal se extiende en paralelo a la playa, con cuadras de tiendas',
                'latitud' => '20.6222200',
                'longitud' => '-87.0694400',
                'giro' => 'Destino Turistico' ,
                'link' => 'google.com' ,
                'imagen' => null,
                'galeria1' => null,
                'galeria2' => null,
                'galeria3' => null,
                'galeria4' => null,
            ]
        ]);
    }
}
