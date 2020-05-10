<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Mesa;

class MesasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       
/*
        DB::table('Mesas')->insert([
            'Nombre'=>'Mesa 1',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Sillas'=>4
        ]);
*/

        Mesa::create([
            'Nombre'=>'Mesa 1',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 2',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 3',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 4',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 5',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 6',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 7',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 8',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 9',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 10',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 11',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 12',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 13',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 14',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 15',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 16',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 17',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 18',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 19',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 20',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

        Mesa::create([
            'Nombre'=>'Mesa 21',
            'Disponibilidad'=>1,
            'Total'=>'0',
            'Ordenes'=>'{}',
            'Sillas'=>4
        ]);

    }
}
