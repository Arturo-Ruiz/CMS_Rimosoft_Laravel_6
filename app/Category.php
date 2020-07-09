<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'name', 'slug', 'body'
    ];

//Una Categoria puede pertenecer a muchos Post
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
