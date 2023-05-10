<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Practicante']);

        Permission::create(['name' => 'admin.hp.index'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.practicantes.hp.practicante'])->syncRoles([$role1, $role2]);           
        Permission::create(['name' => 'admin.practicantes.hp.create'])->syncRoles([$role1, $role2]);           
        Permission::create(['name' => 'admin.practicantes.hp.update'])->syncRoles([$role1, $role2]);                    
        Permission::create(['name' => 'admin.practicantes.destroy'])->syncRoles([$role1, $role2]);  
        
        
        Permission::create(['name' => 'admin.horas.hp.hora'])->syncRoles([$role1, $role2]);           
        Permission::create(['name' => 'admin.horas.hp.hora_create'])->syncRoles([$role1, $role2]);           
        Permission::create(['name' => 'admin.horas.hp.hora_update'])->syncRoles([$role1, $role2]);                    
        Permission::create(['name' => 'admin.horas.destroy'])->syncRoles([$role1, $role2]);    
        
        

    }
}
