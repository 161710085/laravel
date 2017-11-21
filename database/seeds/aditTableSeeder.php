<?php

use Illuminate\Database\Seeder;

class aditTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adit=[
        ['title'=>'tips cepat nikah','content'=>'lorem ipsum'],
          ['title'=>'Haruskah Nikah?','content'=>'lorem ipsum'],
            ['title'=>'membangun visi misi keluarga','content'=>'lorem ipsum']
        ];
        //masukan data ke table post0........................... database
        DB::table('adit')->insert($adit);
            }
}
