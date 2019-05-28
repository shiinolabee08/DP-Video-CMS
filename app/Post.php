<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [ 'name', 'slug', 'featured_image', 'content', 'published' ];
}
