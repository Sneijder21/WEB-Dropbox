<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create([
        	'name'=>		'Admin',
        	'slug'=>		'admin',
        	'description'=>	'Acceso total al sistema',
        	'special'=>		'all-access',

        ]);

        DB::table('users')->insert([
        	'name'		=>'Sneijder',
        	'email'		=>'admin@admin.com',
        	'password'	=>bcrypt('password'),
        ]);
    }
}
