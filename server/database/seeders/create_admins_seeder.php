<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class create_admins_seeder extends Seeder
{
    public function run(): void
    {
        $admin1 = new Admin;
        $admin1->name = 'Huỳnh Ngọc Sơn';
        $admin1->email = 'admin@123';
        $admin1->email_verified_at = null;
        $admin1->password = Hash::make('Admin@123');
        $admin1->role = 1;  
        $admin1->save();

        $admin2 = new Admin;
        $admin2->name = 'Thanh Tuấn';
        $admin2->email = 'admin@456';
        $admin2->address = 'Tiền Giang';
        $admin2->phone = '0987321645';
        $admin2->email_verified_at = null;
        $admin2->password = Hash::make('Admin@123');
        $admin2->role = 2;
        $admin2->remember_token = '';
        $admin2->save();

        
    }
}
