<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$user1 = User::create([
			'name'=>'Demo Penulis',
			'email'=>'penulis@gmail.com',
			'password'=>bcrypt('12345678'),
		]);
		$user1->assignRole($user1);
		
		$user2 = User::create([
			'name'=>'Demo Admin',
			'email'=>'admin@gmail.com',
			'password'=>bcrypt('12345678'),
		]);
		$user2->assignRole($user2);
		
		
		$user3 = User::create([
			'name'=>'Demo SuperAdmin',
			'email'=>'superadmin@gmail.com',
			'password'=>bcrypt('12345678'),
		]);
		$user3->assignRole($user3);
    }
}
