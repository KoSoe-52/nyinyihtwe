<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(10)->create();
      // \App\Models\Remark::truncate();
        $users = [
             ["name"=>"Ko Soe","username"=>"admin","password"=>Hash::make('admin'),"phone"=>"096948843","address"=>"Thazi"]
         ];
         \App\Models\User::insert($users);
    }
}
