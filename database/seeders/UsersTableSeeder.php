<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'		    => 'Mike Conde',
            'email'		    => 'mike.conde28@gmail.com',
            'role'        => 'admin',
            'status'        => '1',
            'password'	    => Hash::make('12345'),
        ]);

        User::create([
            'name'		    => 'RSB Acc',
            'email'		    => 'rsb@gmail.com',
            'role'        => 'approver',
            'status'        => '1',
            'password'	    => Hash::make('12345'),
        ]);

        User::create([
            'name'		    => 'LMS Acc',
            'email'		    => 'admin@lms.com',
            'role'        => 'admin',
            'status'        => '1',
            'password'	    => Hash::make('12345'),
        ]);

        User::create([
            'name'		    => 'Paquito Jr Conde',
            'email'		    => 'paquitojrconde1987@gmail.com',
            'role'        => 'admin',
            'status'        => '1',
            'password'	    => Hash::make('123123123'),
        ]);
    }
}