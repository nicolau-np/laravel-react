<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Contact_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('contacts')->insert(array(
            array(
                'name' => 'Joaquina Rosa',
                'phone' => '944928219'
               
              ),array(
                'name' => 'José Pungue',
                'phone' => '929007118'
              ),array(
                'name' => 'José Francisco Boaventura Pungue',
                'phone' => '923844114'
              ),array(
                'name' => 'Maria Rosa da Conceição',
                'phone' => '916771911'
              ),array(
                'name' => 'Dulce Fontes',
                'phone' => '9345282811'
              )
        ));
    }
}
