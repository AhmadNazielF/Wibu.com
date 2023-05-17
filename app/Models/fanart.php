<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fanart extends Model
{
    use HasFactory;
    protected $table = 'fanarts';
    protected $fillable = ['character_id','image'];

    public function character(): BelongsTo
    {
        return $this->belongsTo(character::class);
    }
}
