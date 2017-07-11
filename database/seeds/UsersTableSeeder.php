<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    		DB::table('users')->insert([
          'name' => 'monish',
          'email' => 'monish.narwani@focalworks.in',
          'password' => bcrypt('password'),
          'created_at' =>  Carbon::now(),
          'updated_at' =>  Carbon::now(),
	      ]);
    		DB::table('users')->insert([
          'name' => 'amitav',
          'email' => 'amitav.roy@focalworks.in',
          'password' => bcrypt('password'),
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
	      ]);
    }
}
