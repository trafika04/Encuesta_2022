<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CalificacionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('calificaciones')->delete();
        
        \DB::table('calificaciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_empresa' => 1,
                'id_registro' => 1,
                'c_final' => '127',
                'c_cat_1' => '8',
                'c_cat_2' => '47',
                'c_cat_3' => '13',
                'c_cat_4' => '50',
                'c_cat_5' => '23',
                'c_cat_6' => '8',
                'c_cat_7' => '10',
                'c_dominio_1' => '8',
                'c_dominio_2' => '24',
                'c_dominio_3' => '15',
                'c_dominio_4' => '5',
                'c_dominio_5' => '8',
                'c_dominio_6' => '17',
                'c_dominio_7' => '10',
                'c_dominio_8' => '17',
                'c_dominio_9' => '10',
                'c_dominio_10' => '13',
                'c_dimension_1' => '6',
                'c_dimension_2' => '1',
                'c_dimension_3' => '1',
                'c_dimension_4' => '3',
                'c_dimension_5' => '5',
                'c_dimension_6' => '5',
                'c_dimension_7' => '0',
                'c_dimension_8' => '5',
                'c_dimension_9' => '6',
                'c_dimension_10' => '6',
                'c_dimension_11' => '2',
                'c_dimension_12' => '1',
                'c_dimension_13' => '6',
                'c_dimension_14' => '5',
                'c_dimension_15' => '5',
                'c_dimension_16' => '3',
                'c_dimension_17' => '9',
                'c_dimension_18' => '0',
                'c_dimension_19' => '17',
                'c_dimension_20' => '4',
                'c_dimension_21' => '6',
                'c_dimension_22' => '6',
                'c_dimension_23' => '7',
                'created_at' => '2022-08-24 17:09:07',
                'updated_at' => '2022-08-24 17:09:07',
            ),
            1 => 
            array (
                'id' => 2,
                'id_empresa' => 1,
                'id_registro' => 2,
                'c_final' => '139',
                'c_cat_1' => '8',
                'c_cat_2' => '47',
                'c_cat_3' => '13',
                'c_cat_4' => '62',
                'c_cat_5' => '23',
                'c_cat_6' => '8',
                'c_cat_7' => '10',
                'c_dominio_1' => '8',
                'c_dominio_2' => '24',
                'c_dominio_3' => '15',
                'c_dominio_4' => '5',
                'c_dominio_5' => '8',
                'c_dominio_6' => '17',
                'c_dominio_7' => '22',
                'c_dominio_8' => '17',
                'c_dominio_9' => '10',
                'c_dominio_10' => '13',
                'c_dimension_1' => '6',
                'c_dimension_2' => '1',
                'c_dimension_3' => '1',
                'c_dimension_4' => '3',
                'c_dimension_5' => '5',
                'c_dimension_6' => '5',
                'c_dimension_7' => '0',
                'c_dimension_8' => '5',
                'c_dimension_9' => '6',
                'c_dimension_10' => '6',
                'c_dimension_11' => '2',
                'c_dimension_12' => '1',
                'c_dimension_13' => '6',
                'c_dimension_14' => '5',
                'c_dimension_15' => '5',
                'c_dimension_16' => '3',
                'c_dimension_17' => '9',
                'c_dimension_18' => '12',
                'c_dimension_19' => '17',
                'c_dimension_20' => '4',
                'c_dimension_21' => '6',
                'c_dimension_22' => '6',
                'c_dimension_23' => '7',
                'created_at' => '2022-08-24 17:09:49',
                'updated_at' => '2022-08-24 17:09:49',
            ),
        ));
        
        
    }
}