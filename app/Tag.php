<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable =[
        'name', 'slug', 
    ];

//Una Categoria puede pertenecer a muchos Post
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
