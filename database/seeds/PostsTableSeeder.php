<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('posts')->insert([
    		'user_id' => 1,
    		'title' => 'What is Lorem Ipsum?',
    		'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
    	]);
    	DB::table('posts')->insert([
    		'user_id' => 1,
    		'title' => 'Where does it come from?',
    		'body' => 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
    	]);
    	DB::table('posts')->insert([
    		'user_id' => 2,
    		'title' => 'Why do we use it?',
    		'body' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
    	]);
    }
}
