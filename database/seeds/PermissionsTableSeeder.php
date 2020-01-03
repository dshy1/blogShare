<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      
        $permissions = [

        	// can: Admin && Autor
        	// Posts
        	'cria-post',
        	'lista-post',
        	'atualiza-post',
          'deleta-post',

          // can: Admin
          // Categorias
          'cria-categoria',
          'lista-categoria',
          'atualiza-categoria',
          'deleta-categoria',

          // can: Admin
          // Autor
          'cria-user',
          'lista-user',
          'atualiza-user',
          'deleta-user',
        ];

        // cria as permissões acima no DB, na tabela permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}

// pivot table: role_has_permissions