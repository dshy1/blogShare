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
            'name' => 'admin',
            'guard_name' => 'web'

        ]);

        Role::create([
            'name' => 'autor',
            'guard_name' => 'web'
        ]);
    }
}
