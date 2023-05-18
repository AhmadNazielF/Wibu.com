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
            'click'=> '0',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('characters')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Tornado of Terror')),
                'nama' => 'Tornado of Terror',
                'role' => 'supporting character',
                'umur' => '28',
                'status' => 'belum menikah',
                'gender' => 'perempuan',
                'tinggi' => '152 cm',
                'image' => 'foto/tornado.jpg',
                'deskripsi' => 'Superhero dengan kekuatan psikis yang kuat',
                'penampilan' => 'Memakai seragam superhero berwarna hijau',
                'sejarah'=> 'Anggota Asosiasi Pahlawan Kelas S',
                'anime_id'=> '1',
                'click'=> '50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('characters')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Goku')),
            'nama' => 'Goku',
            'role' => 'main character',
            'umur' => '35',
            'status' => 'menikah',
            'gender' => 'laki laki',
            'tinggi' => '175 cm',
            'image' => 'foto/goku.jpg',
            'deskripsi' => 'Super Saiyan',
            'penampilan' => 'Super Saiyan',
            'sejarah'=> 'Pahlawan alam semesta',
            'anime_id'=> '2',
            'click'=> '10',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('characters')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Ichigo Kurosaki')),
                'nama' => 'Ichigo Kurosaki',
                'role' => 'main character',
                'umur' => '17',
                'status' => 'belum menikah',
                'gender' => 'laki laki',
                'tinggi' => '175 cm',
                'image' => 'foto/ichigo.jpg',
                'deskripsi' => 'Pemilik kekuatan Shinigami',
                'penampilan' => 'Rambut oranye dan seragam Shinigami',
                'sejarah'=> 'Melindungi dunia dari ancaman Hollow',
                'anime_id'=> '5',
                'click'=> '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('characters')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Genos')),
                'nama' => 'Genos',
                'role' => 'supporting character',
                'umur' => '19',
                'status' => 'belum menikah',
                'gender' => 'laki laki',
                'tinggi' => '170 cm',
                'image' => 'foto/genos.jpg',
                'deskripsi' => 'Cyborg dengan kekuatan yang luar biasa',
                'penampilan' => 'Cyborg berwarna silver',
                'sejarah'=> 'Menginginkan kekuatan sebanding dengan Saitama',
                'anime_id'=> '1',
                'click'=> '1000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('characters')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Sasuke Uchiha')),
            'nama' => 'Sasuke Uchiha',
            'role' => 'main character',
            'umur' => '17',
            'status' => 'belum menikah',
            'gender' => 'laki laki',
            'tinggi' => '168 cm',
            'image' => 'foto/sasuke.jpg',
            'deskripsi' => 'Ninja yang mencari kekuatan untuk membalas dendam',
            'penampilan' => 'Rambut hitam dan pakaian ninja',
            'sejarah'=> 'Membentuk pasukan untuk melawan ancaman dunia',
            'anime_id'=> '3',
            'click'=> '60',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('characters')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Kakashi Hatake')),
            'nama' => 'Kakashi Hatake',
            'role' => 'supporting character',
            'umur' => '38',
            'status' => 'belum menikah',
            'gender' => 'laki laki',
            'tinggi' => '181 cm',
            'image' => 'foto/kakashi.jpg',
            'deskripsi' => 'Ninja dengan Sharingan',
            'penampilan' => 'Tutup mata dan baju hitam',
            'sejarah'=> 'Membantu melatih generasi ninja berikutnya',
            'anime_id'=> '3',
            'click'=> '43',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('characters')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Hinata Hyuga')),
            'nama' => 'Hinata Hyuga',
            'role' => 'supporting character',
            'umur' => '17',
            'status' => 'belum menikah',
            'gender' => 'perempuan',
            'tinggi' => '163 cm',
            'image' => 'foto/hinata.jpg',
            'deskripsi' => 'Ninja dengan kekuatan Byakugan',
            'penampilan' => 'Rambut hitam dan mata putih',
            'sejarah'=> 'Mengembangkan kekuatannya untuk melindungi orang yang dicintainya',
            'anime_id'=> '3',
            'click'=> '79',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
    
}
