<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
  public function run()
  {
    $role_manager  = Role::where('name', 'admin')->first();
    $manager = new User();
    $manager->name = 'panen';
    $manager->email = 'panen@promo.page';
    $manager->password = bcrypt('admin123');
    $manager->save();
    $manager->roles()->attach($role_manager);
  }
}