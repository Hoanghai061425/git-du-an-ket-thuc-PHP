<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleSeeder::class);

        $data = [
        	[
        		'id'=>1,
        		'full_name' =>'Hai',
        		//'username' =>'admin1',
        		'email'=> 'admin1@gmail.com',
                'password' => bcrypt('12345678'),
                'gender' => 'Nam',
                'phone' => '0123456789',
                'address' => 'Da Nang'
        	],
			[
        		'id'=>2,
        		'full_name' =>'Huy',
        		//'username' =>'admin2',
        		'email'=> 'admin2@gmail.com',
                'password' => bcrypt('12345678'),
                'gender' => 'Nam',
                'phone' => '0123456789',
                'address' => 'Da Nang'
        	],

            [
                'id'=>3,
                'full_name' =>'Hoang',
                //'username' =>'teacher',
                'email'=> 'teacher@gmail.com',
                'password' => bcrypt('12345678'),
                'gender' => 'Nam',
                'phone' => '0123456789',
                'address' => 'Da Nang'
            ],
            [
                'id'=>4,
                'full_name' =>'Trung',
                //'username' =>'trung',
                'email'=> 'trung@gmail.com',
                'password' => bcrypt('12345678'),
                'gender' => 'Nam',
                'phone' => '0123456789',
                'address' => 'Da Nang'
            ]
        ];

        $role_users = [
        	[
        		'user_id' => 1,
        		'roles_id' => 1
        	],
        	[
        		'user_id' => 2,
        		'roles_id' => 2
        	],
            [
                'user_id' => 3,
                'roles_id' => 3
            ],
            [
                'user_id' => 4,
                'roles_id' => 4
            ]
        ];

        DB::table('users')->insert($data);
        DB::table('role_users')->insert($role_users);
    }
}



