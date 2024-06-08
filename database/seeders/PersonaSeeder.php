<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persona')->insert([
            [
                'cPerApellido' => 'Gonzalez',
                'cPerNombre' => 'Santiago',
                'cPerDireccion' => 'Calle Falsa 123',
                'dPerFecNac' => '1992-01-15',
                'nPerEdad' => 32,
                'nPerSueldo' => 4500.75,
                'cPerRnd' => 'abc789xyz',
                'nPerEstado' => '1',
            ],
            [
                'cPerApellido' => 'Ramirez',
                'cPerNombre' => 'Lucia',
                'cPerDireccion' => 'Av. Siempre Viva 742',
                'dPerFecNac' => '1988-11-05',
                'nPerEdad' => 35,
                'nPerSueldo' => 3200.60,
                'cPerRnd' => 'def123uvw',
                'nPerEstado' => '1',
            ],
            [
                'cPerApellido' => 'Perez',
                'cPerNombre' => 'Jose',
                'cPerDireccion' => 'Boulevard del Sol 456',
                'dPerFecNac' => '1978-06-20',
                'nPerEdad' => 45,
                'nPerSueldo' => 6000.00,
                'cPerRnd' => 'ghi456rst',
                'nPerEstado' => '1',
            ],
            [
                'cPerApellido' => 'Diaz',
                'cPerNombre' => 'Elena',
                'cPerDireccion' => 'Plaza Mayor 789',
                'dPerFecNac' => '2001-04-10',
                'nPerEdad' => 23,
                'nPerSueldo' => 2400.25,
                'cPerRnd' => 'jkl789mno',
                'nPerEstado' => '1',
            ],
            [
                'cPerApellido' => 'Ruiz',
                'cPerNombre' => 'Miguel',
                'cPerDireccion' => 'Camino Real 321',
                'dPerFecNac' => '1997-09-25',
                'nPerEdad' => 26,
                'nPerSueldo' => 3500.80,
                'cPerRnd' => 'pqr012stu',
                'nPerEstado' => '1',
            ],
        ]);
    }
}
