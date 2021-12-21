<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
class PermissionDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

		//create permission
		Permission::create(['name'=> 'view post']);
		Permission::create(['name'=> 'create post']);
		Permission::create(['name'=> 'edit post']);
		Permission::create(['name'=> 'delete post']);
		Permission::create(['name'=> 'publish post']);
		Permission::create(['name'=> 'unpublish post']);

		//create roles
		$penulis = Role::create(['name' => 'writer','guard_name'=>'web']);
		$penulis->givePermissionTo('view post');
		$penulis->givePermissionTo('create post');
		$penulis->givePermissionTo('edit post');
		$penulis->givePermissionTo('delete post');

		//
		$adminRole = Role::create(['name'=>'admin','guard_name'=>'web']);
        $adminRole->givePermissionTo('view post');
		$adminRole->givePermissionTo('create post');
		$adminRole->givePermissionTo('edit post');
		$adminRole->givePermissionTo('delete post');
		$adminRole->givePermissionTo('publish post');
		$adminRole->givePermissionTo('unpublish post');

		//
		$superadminRole=Role::create(['name'=>'superadmin','guard_name'=>'web']);

		$user1 = User::create([
			'name'=>'Demo Penulis',
			'email'=>'penulis@gmail.com',
			'password'=>bcrypt('12345678'),
		]);
		$user1->assignRole($penulis);

		$user2 = User::create([
			'name'=>'Demo Admin',
			'email'=>'admin@gmail.com',
			'password'=>bcrypt('12345678'),
		]);
		$user2->assignRole($adminRole);


		$user3 = User::create([
			'name'=>'Demo SuperAdmin',
			'email'=>'superadmin@gmail.com',
			'password'=>bcrypt('12345678'),
		]);
		$user3->assignRole($superadminRole);


    }
}








































