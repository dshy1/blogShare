<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10 ; $i++) { 

	       DB::table('posts')->insert([
	            'user_id' => 1,
	            'titulo'  => Str::random(20),
	            'slug'    => Str::random(20),
	            'texto'   =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a sapien at erat molestie consectetur. Phasellus a lacus et neque euismod placerat. Mauris non mauris id ligula bibendum vestibulum',
	             'image'      => 0,
		         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
		         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
	        ]);

      	}
    }
}
