<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'mesas',
            'facturas',
            'orden_atendidas',
            'orden_pedidas',
            'recetas'
        ]);

        $this->call(MesasSeeder::class);
        $this->call(FacturasSeeder::class);
        $this->call(OrdenAtendidasSeeder::class);
        $this->call(OrdenPedidasSeeder::class);
        $this->call(RecetasSeeder::class);
    }

        protected function truncateTables(array $tables)
        {
            DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
            foreach($tables as $table){
                DB::table($table)->truncate();
            }
            DB::statement("SET FOREIGN_KEY_CHECKS = 1;");
        }

}
