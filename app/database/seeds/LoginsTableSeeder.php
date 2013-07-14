<?php

class LoginsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('logins')->delete();

        $logins = array(
        	'name' => 'Hori Revens',
        	'username' => 'admin',
        	'password' => Hash::make('admin'),
        	'add_on' => date('Y-m-d H:i:s')
        );

        // Uncomment the below to run the seeder
        DB::table('logins')->insert($logins);
    }

}