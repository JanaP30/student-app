<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUserExist = User::where('email', 'admin@admin.com')->first();
        if(!$adminUserExist){
            $rootUser = User::create([
            'name'=> 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('pass123'),
            'email_verified_at'=> now(),
            'group'=> User::$_GROUP_ADMIN,
            ]);
        }
        
            
        
    }
}


    