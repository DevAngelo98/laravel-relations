<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tagtitle', 'slug'];

    public function posts() {
        return $this -> belongsToMany(Post::class);
    }
}
