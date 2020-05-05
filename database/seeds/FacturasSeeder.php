<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Factura;
use App\Mesa;

class FacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MontoFactura = Mesa::where('Nombre','Mesa 1')->value('Total');

        Factura::create([
            'Nombre' => 'Hector Jesus',
            'Apellido_Pat' => 'Guerrero',
            'Apellido_Mat' => 'Diaz',
            'Domicilio' => 'Priv. Galeana ',
            'RFC' => 'RFC1234',
            'Monto' => $MontoFactura,
            'Condiciones' => 'usado',
            'Metodo' => 'efectivo',
            'Cantidad_Descripcion' => '1 plato de mole'
        ]);
            
    }
}
