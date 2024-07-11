<?php

use App\Usuario;

use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'usuario' => 'topcom', 
            'password' => hash('ripemd160', 'tsw.2021'),
            'nombre' => 'topcom', 
            'curp' => 'topcom', 
            'rfc' => 'topcom', 
            'direccion' => 'Unidad Tlateloco #135',
            'correo' => 'topcom@mail.com'
        ]);
    }
}
