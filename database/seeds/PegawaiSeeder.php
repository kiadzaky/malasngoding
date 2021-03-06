<?php

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
        for ($i=0; $i < 50; $i++) { 
            DB::table('pegawai')->insert([
                'pegawai_nama'=>$faker->name,
                'pegawai_alamat' => $faker->address,
            ]);
        }
    }
}
