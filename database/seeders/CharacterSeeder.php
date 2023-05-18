<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Saitama')),
            'nama' => 'Saitama',
            'role' => 'main character',
            'umur' => '28',
            'status' => 'belum menikah',
            'gender' => 'laki laki',
            'tinggi' => '180 cm',
            'image' => 'foto/saitama.jpg',
            'deskripsi' => 'botak',
            'penampilan' => 'botak',
            'sejarah'=> 'botak',
            'anime_id'=> '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
