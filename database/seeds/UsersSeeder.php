<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Administrador',
            'email'=>'admin@administracion.com',
            'puesto'=>'admin',
            'password'=>Hash::make('Contra1.'),
        ]);

        User::create([
            'name'=>'Carlos',
            'email'=>'Carlos@cocineros.com',
            'puesto'=>'chef',
            'password'=>Hash::make('Contra1.'),
        ]);

        User::create([
            'name'=>'Manuel',
            'email'=>'Manuel@Meseros.com',
            'puesto'=>'mesero',
            'password'=>Hash::make('Contra1.'),
        ]);

        User::create([
            'name'=>'Gerardo',
            'email'=>'Gerardo@gestion.com',
            'puesto'=>'gestion',
            'password'=>Hash::make('Contra1.'),
        ]);
    }
}
