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

        Permission::create(['name' => 'admin.hp.index']);

        Permission::create(['name' => 'admin.practicantes.hp.practicante']);           
        Permission::create(['name' => 'admin.practicantes.hp.create']);           
        Permission::create(['name' => 'admin.practicantes.hp.update']);                    
        Permission::create(['name' => 'admin.practicantes.destroy']);  
        
        
        Permission::create(['name' => 'admin.horas.hp.hora']);           
        Permission::create(['name' => 'admin.horas.hp.hora_create']);           
        Permission::create(['name' => 'admin.horas.hp.hora_update']);                    
        Permission::create(['name' => 'admin.horas.destroy']);                    

    }
}
