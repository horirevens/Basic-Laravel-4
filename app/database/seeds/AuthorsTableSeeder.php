<?php

class AuthorsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('authors')->delete();

        $authors = array(
        	'name' => 'Hori Revens',
        	'address' => 'Perum Bumi Asri E-06, Kaliombo - Kediri',
        	'gender' => 'M',
        	'dob' => '1991-09-18',
        	'active' => '1',
        	'creator' => 'admin',
        	'created_at' => '2013-07-14 14:42:00'
        );

        // Uncomment the below to run the seeder
        DB::table('authors')->insert($authors);
    }

}