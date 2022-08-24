<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('empresas')->delete();
        
        \DB::table('empresas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'token' => '9116c06n-l7mt-nzzo-2olt-3c2a1airl9t',
                'nombre' => 'Anim voluptatem ulla',
                'logo' => 'logos/MXSECl9PAJOC9nemNy0IytNPM9UDR4A1hEfoa8JJ.jpg',
                'imagen_fondo' => 'imagenes_fondo/WaUCPEuONTRyslDJ1jnfY7aYnCWnavBPsTNbBe4C.jpg',
                'colores_principales' => '#765e2e',
                'descripcion' => 'Nulla recusandae Do',
                'activo' => '1',
                'aviso' => '<div>Aut ex voluptas volu.</div>',
                'area' => '["Necessitatibus exped"]',
                'tipo_contratacion' => '["Accusamus quod omnis"]',
                'jornada_trabajo' => '["Ad nobis expedita re"]',
                'rotacion_turnos' => '["Blanditiis maxime au"]',
                'tipo_empleado' => '["Quis quaerat sint ni"]',
                'created_at' => '2022-08-24 17:07:41',
                'updated_at' => '2022-08-24 17:07:41',
            ),
        ));
        
        
    }
}