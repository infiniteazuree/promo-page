<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promos extends Model
{
    protected $fillable = ['image_url', 'url', 'note'];
}
