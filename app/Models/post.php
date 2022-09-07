<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory , SoftDeletes;

    //protected $table = 'my_posts';
    // عشان اقول للمودل انت مرتبط مع هاد الجدول لو غيرت الاسم
    protected $fillable = [
        'title',
        'image',
        'content',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
