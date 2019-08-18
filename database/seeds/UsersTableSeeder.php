<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
        	[
        		'name'     => "kyawkyaw",
        		'email'    => "kyawkyaw@gmail.com",
        		'password' => bcrypt('secret')

        	],
        	[
        		'name'     => "zinzin",
        		'email'    => "zinzin@gmail.com",
        		'password' => bcrypt('secret')

        	],
        	        	[
        		'name'     => "koko",
        		'email'    => "koko@gmail.com",
        		'password' => bcrypt('secret')

        	]
        ]);
    }
}
