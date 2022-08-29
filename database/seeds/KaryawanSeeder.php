<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('karyawan')->insert([
            'nama' => 'Zikri Ramdani',
            'tanggal_lahir' => '2021-07-12',
            'gaji' => 10000,
            'status_karyawan' => 1
        ]);
    }
}

