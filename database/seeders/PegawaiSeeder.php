<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        for ($i=1; $i < 50; $i++) {

      // insert data ke table pegawai
      DB::table('pegawai')->insert([
        'nama' => $faker->name,
        'jabatan' => $faker->jobTitle,
        'umur' => $faker->numberBetween(25,30),
        'alamat' => $faker->address
    ]);
}
    }
}
