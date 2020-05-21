<?php

use Illuminate\Database\Seeder;
use App\OrdenPedida;

class OrdenPedidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrdenPedida::create([
            'Mesa'=>'1',
            'receta_id'=>1,
            'Ingredientes_Alternativos'=>'{"1/2 cebolla blanca mediana cortada en rodajas","1 cucharadita de orégano mexicano","4 dientes de ajo enteros"}',
            'Precio'=>'25',
            'Preparandose'=>0
        ]);
    }
}
