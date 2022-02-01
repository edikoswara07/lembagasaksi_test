<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role as ModelsRole;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // role seeder
        // terdiri dari 3 Role
        // super admin
        // admin 
        // user
        $role1 = ModelsRole::create(['name' => 'superAdmin']);
        $role2 = ModelsRole::create(['name' => 'admin']);
        $role3 = ModelsRole::create(['name' => 'user']);
    }
}
