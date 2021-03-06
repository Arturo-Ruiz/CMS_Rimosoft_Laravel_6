<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable =[
        'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
    ];

//Pertenece a un usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
//Pertenece a una Categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }

//Una categoria tiene y pertenece a muchas pero muchas etiquetas
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
