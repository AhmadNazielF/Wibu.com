<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anime extends Model
{
    use HasFactory;
    protected $table = 'animes';
    protected $fillable = ['judul','slug','judul_alternatif','genre','status','ratings','jumlah_episode','studio','tahun_tayang','sinopsis','image'];
    public function character()
    {
        return $this->hasMany(character::class);
    }
}
