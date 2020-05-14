<?php

use Illuminate\Database\Seeder;
use App\OrdenPreparada;

class OrdenPreparadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrdenPreparada::create([
            'Mesa'=>'1',
            'ID_Receta'=>1,
            'Ingredientes_Alternativos'=>'{"1/2 cebolla blanca mediana cortada en rodajas","1 cucharadita de orégano mexicano","4 dientes de ajo enteros"}',
            'Precio'=>'25'
        ]);
    }
}
