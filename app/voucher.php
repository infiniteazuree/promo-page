<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voucher extends Model
{
    protected $fillable = ['code', 'note', 'reward_id', 'multiplier_id', 'random_reward_id'];
}
