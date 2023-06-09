<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['user_id','thread_id','comment'];
    protected $guarded =['id'];
    /**
     * Get the user that owns the comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function thread()
    {
        return $this->belongsTo(thread::class,'thread_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
