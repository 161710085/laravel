<?php

use Illuminate\Database\Seeder;

class siswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $siswa=[
               ['Nama'  		=> 'a',
               'Kelas' 			=> 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'  		=> 'islam',
               'Umur'  			=> '17',
               'Alamat'  		=> 'bandung'
             ],
                 ['Nama'      => 'b',
               'Kelas'      => 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'      => 'islam',
               'Umur'       => '17',
               'Alamat'     => 'bandung'
             ],
                 ['Nama'      => 'c',
               'Kelas'      => 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'      => 'islam',
               'Umur'       => '17',
               'Alamat'     => 'bandung'
             ],
                 ['Nama'      => 'd',
               'Kelas'      => 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'      => 'islam',
               'Umur'       => '17',
               'Alamat'     => 'bandung'
             ],
                 ['Nama'      => 'e',
               'Kelas'      => 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'      => 'islam',
               'Umur'       => '17',
               'Alamat'     => 'bandung'
             ],
                 ['Nama'      => 'f',
               'Kelas'      => 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'      => 'islam',
               'Umur'       => '17',
               'Alamat'     => 'bandung'
             ],
                 ['Nama'      => 'g',
               'Kelas'      => 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'      => 'islam',
               'Umur'       => '17',
               'Alamat'     => 'bandung'
             ],
                 ['Nama'      => 'h',
               'Kelas'      => 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'      => 'islam',
               'Umur'       => '17',
               'Alamat'     => 'bandung'
             ],
                 ['Nama'      => 'i',
               'Kelas'      => 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'      => 'islam',
               'Umur'       => '1',
               'Alamat'     => 'bandung'
             ],
                 ['Nama'      => 'j',
               'Kelas'      => 'XI RPL1',
               'Tanggal_Lahir'  => '2001-01-01',
               'Jenis_Kelamin'  => 'laki-lkai',
               'Agama'      => 'islam',
               'Umur'       => '17',
               'Alamat'     => 'bandung'
             ]
             
              
         ];
       
               //masukan data ke table post0........................... database
        DB::table('siswa')->insert($siswa);
    }
}
