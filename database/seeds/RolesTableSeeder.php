<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        // cria as políticas no DB, na tabela roles
         Role::create([
            // 'name' => 'Admin',
            // 'guard_name' => 'web'

            'name' => 'Autor',
            'guard_name' => 'web'
        ]);
    }
}
