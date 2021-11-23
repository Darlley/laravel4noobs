<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'published'
    ];
    protected $casts = [
        'published' => 'boolean'
    ];

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    public function users(){
        return $this->belongstomany(User::class);
    }
}