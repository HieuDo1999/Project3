<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'name'=>"Admin",
                'address'=>"Nam Dinh",
                'role'=>"2",
                'phone'=>'21313213213'
                
            ]
        ]);
    }
}
