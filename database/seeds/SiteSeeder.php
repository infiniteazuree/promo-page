<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Site;
class SiteSeeder extends Seeder
{
  public function run()
  {
    $sites = new Site();
    $sites->id = '3';
    $sites->toggled = '0';
    $sites->header_url = '-';
    $sites->daftar_url = '-';
    $sites->running_text = '-';
    $sites->save();
  }
}