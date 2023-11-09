<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = ['toggled', 'header_url', 'daftar_url', 'running_text'];
}
