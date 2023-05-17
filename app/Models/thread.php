<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    use HasFactory;
    protected $table = 'threads';
    protected $fillable = ['slug','user_id','judul','comment'];

    /**
     * Get all of the comments for the thread
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
