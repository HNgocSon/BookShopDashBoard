<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class create_customers_seeder extends Seeder
{
    public function run(): void
    {
        $user = new Customer;
        $user->name = 'Trần Thanh Tuấn';
        $user->email = 'nhoxbolt@gmail.com';
        $user->password = Hash::make('Abc@123');
        $user->status = 1;
        $user->save();

        $user1 = new Customer;
        $user1->name = 'Huỳnh Ngọc Sơn';
        $user1->email = 'huynhsonqr@gmail.com';
        $user1->password = Hash::make('Abc@123');
        $user1->status = 1;
        $user1->save();

      
    }
}
