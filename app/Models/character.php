<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class character extends Model
{
    use HasFactory;
    protected $table = 'characters';
    protected $fillable = ['nama','slug','role','umur','status','gender','tinggi','deskripsi','penampilan','sejarah','image'];
}
