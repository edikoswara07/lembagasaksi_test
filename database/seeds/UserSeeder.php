<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create user superAdmin
        $user1 = User::create([
            'name' => 'super admin',
            'email' => 'superadmin@test.com',
            'password' => bcrypt('lavendatest')
        ]);
        $user1->assignRole('superAdmin');

        // admin
        $user2 = User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('lavendatest'),
        ]);
        $user2->assignRole('admin');

        // user
        $user3 = User::create([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => bcrypt('lavendatest'),
        ]);
        $user3->assignRole('user');
    }
}
