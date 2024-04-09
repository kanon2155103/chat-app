<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'content',
        'user_id',
        'created_stamp',
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
