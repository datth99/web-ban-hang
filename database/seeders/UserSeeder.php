<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'fullname' => 'Administrator', 
                'password'=> Hash::make("123456"), 
                'email' => 'admin@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 1
            ],
            [
                'fullname' => 'Nguyễn Văn A', 
                'password'=> Hash::make("123456"), 
                'email' => 'nguyenvana@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 2
            ],
            [
                'fullname' => 'Nguyễn Văn B', 
                'password'=> Hash::make("123456"), 
                'email' => 'nguyenvanb@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 2
            ],
            [
                'fullname' => 'Nguyễn Văn C', 
                'password'=> Hash::make("123456"), 
                'email' => 'nguyenvanc@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 2
            ],
            [
                'fullname' => 'Nguyễn Văn D', 
                'password'=> Hash::make("123456"), 
                'email' => 'nguyenvand@gmail.com', 
                'phone' => '0123456789', 
                'address'=>'Hà Nội',
                'level' => 2
            ],
        ];
        DB::table('users')->delete();
        DB::table('users')->insert($users);
    }
}
