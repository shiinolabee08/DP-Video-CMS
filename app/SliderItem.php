<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderItem extends Model
{
    protected $table = 'slider_items';
    protected $fillable = [ 'name', 'image', 'published' ];
}
