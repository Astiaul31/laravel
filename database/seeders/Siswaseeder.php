<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Siswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['nama' => 'Aulia', 'nis' => '202202322', 'jk' => 'P', 
                'tgl_lahir' => '2005-01-18', 'alamat' => 'Bandung'],

            ['nama' => 'Rizal', 'nis' => '202236742', 'jk' => 'L', 
                'tgl_lahir' => '2005-07-19', 'alamat' => 'Aceh'],
        ];

        \DB::table('siswas')->insert($sample);

    }
}
