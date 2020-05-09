<?php

use App\Miembros;
use Illuminate\Database\Seeder;

class MiembrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Miembros::class, 20)->create();
    }
}
