<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animes')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'One Punch Man')),
            'judul' => 'One Punch Man',
            'judul_alternatif' => 'One Punch Man',
            'genre' => 'fantasy,action,comedy',
            'status' => 'completed',
            'ratings' => '10/10',
            'jumlah_episode' => '24',
            'studio' => 'MadHouse',
            'tahun_tayang' => '2015',
            'sinopsis' => 'botak',
            'image'=> 'foto/opm.jpg',
            'id'=> '1',
            'click'=> '250',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('animes')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Dragon Ball')),
            'judul' => 'Dragon Ball',
            'judul_alternatif' => 'Dragon Ball',
            'genre' => 'action,adventure,comedy',
            'status' => 'completed',
            'ratings' => '9/10',
            'jumlah_episode' => '153',
            'studio' => 'Toei Animation',
            'tahun_tayang' => '1986',
            'sinopsis' => 'Seorang anak bernama Son Goku terlibat dalam petualangan fantastis untuk mencari tujuh bola naga yang dapat mengabulkan keinginan apa pun.',
            'image' => 'foto/dragon_ball.jpg',
            'id' => '2',
            'click' => '350',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('animes')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Bleach')),
            'judul' => 'Bleach',
            'judul_alternatif' => 'Bleach',
            'genre' => 'action,adventure,super power',
            'status' => 'completed',
            'ratings' => '8.3/10',
            'jumlah_episode' => '366',
            'studio' => 'Studio Pierrot',
            'tahun_tayang' => '2004',
            'sinopsis' => 'Ichigo Kurosaki, seorang siswa SMA yang bisa melihat hantu, mendapatkan kekuatan Shinigami setelah bertemu dengan Kuchiki Rukia, seorang Shinigami yang terluka.',
            'image' => 'foto/bleach.jpg',
            'id' => '5',
            'click' => '150',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('animes')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Naruto')),
            'judul' => 'Naruto',
            'judul_alternatif' => 'Naruto',
            'genre' => 'action,adventure,fantasy',
            'status' => 'completed',
            'ratings' => '8.5/10',
            'jumlah_episode' => '220',
            'studio' => 'Studio Pierrot',
            'tahun_tayang' => '2002',
            'sinopsis' => 'Cerita mengikuti perjalanan seorang ninja muda bernama Naruto Uzumaki saat ia berusaha untuk menjadi Hokage, pemimpin dan ninja terkuat di desa Konoha.',
            'image' => 'foto/naruto.jpg',
            'id' => '3',
            'click' => '150',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('animes')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Kimetsu no Yaiba')),
            'judul' => 'Kimetsu no Yaiba',
            'judul_alternatif' => 'Demon Slayer',
            'genre' => 'action,adventure,drama,shounen,super power',
            'status' => 'completed',
            'ratings' => '8.8/10',
            'jumlah_episode' => '26',
            'studio' => 'ufotable',
            'tahun_tayang' => '2019',
            'sinopsis' => 'Tanjiro Kamado, seorang anak yang menjadi pemburu iblis setelah keluarganya dibantai oleh iblis dan adiknya Nezuko diubah menjadi iblis..',
            'image' => 'foto/kimetsu_no_yaiba.jpg',
            'id' => '4',
            'click' => '50',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('animes')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'One Piece')),
            'judul' => 'One Piece',
            'judul_alternatif' => 'One Piece',
            'genre' => 'action,adventure,comedy,drama,fantasy,shounen',
            'status' => 'ongoing',
            'ratings' => '9.1/10',
            'jumlah_episode' => '1000',
            'studio' => 'Toei Animation',
            'tahun_tayang' => '1999',
            'sinopsis' => 'Cerita mengikuti petualangan Monkey D. Luffy, seorang bajak laut muda yang memiliki kekuatan buah setan.',
            'image' => 'foto/one_piece.jpg',
            'id' => '6',
            'click' => '50',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('animes')->insert([
            'slug' => strtolower(str_replace(' ', '_', 'Your Lie in April')),
            'judul' => 'Your Lie in April',
            'judul_alternatif' => 'Shigatsu wa Kimi no Uso',
            'genre' => 'drama,music,romance,school',
            'status' => 'completed',
            'ratings' => '9.0/10',
            'jumlah_episode' => '22',
            'studio' => 'A-1 Pictures',
            'tahun_tayang' => '2014',
            'sinopsis' => 'Cerita mengikuti Kōsei Arima, seorang pianis ajaib yang kehilangan minat dalam piano setelah kematian ibunya. Suatu hari, ia bertemu dengan seorang biolais yang penuh semangat bernama Kaori Miyazono yang membantu Kōsei ',
            'image' => 'foto/your_lie_in_april.jpg',
            'id' => '7',
            'click' => '50',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
