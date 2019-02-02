<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_user')->insert([
        	'user_id' => 'ADM001',
        	'user_name' => 'kodok',
        	'user_password' => bcrypt('ngorek'),
            'user_fname' => 'kodok',
            'user_lname' => 'ngorek',
        	'user_role' => 'admin',
        ]);
    }
}
