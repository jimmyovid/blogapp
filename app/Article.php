<?php

namespace App;



class Article extends Model
{
    public function comments(){

        return $this->hasMany(Comment::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
