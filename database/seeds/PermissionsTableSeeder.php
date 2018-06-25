<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuarios
        Permission::create([
        	'name' => 'Navegar usuarios',
        	'slug' => 'users.index',
        	'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver detalle del usuario',
        	'slug' => 'users.show',
        	'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'Edición de usuarios',
        	'slug' => 'users.edit',
        	'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar usuario',
        	'slug' => 'users.destroy',
        	'description' => 'Elmina un usuario del sistema',
        ]);


        //Roles
        Permission::create([
        	'name' => 'Navegar roles',
        	'slug' => 'roles.index',
        	'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver detalle del usuario',
        	'slug' => 'roles.show',
        	'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'Crea un rol',
        	'slug' => 'roles.create',
        	'description' => 'Crea un rol en el sistema',
        ]);
        Permission::create([
        	'name' => 'Edición de roles',
        	'slug' => 'roles.edit',
        	'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar roles',
        	'slug' => 'roles.destroy',
        	'description' => 'Elmina un rol del sistema',
        ]);

        //Productos
        Permission::create([
        	'name' => 'Navegar productos',
        	'slug' => 'products.index',
        	'description' => 'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver detalle del usuario',
        	'slug' => 'products.show',
        	'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'Crea un producto',
        	'slug' => 'products.create',
        	'description' => 'Crea un producto en el sistema',
        ]);
        Permission::create([
        	'name' => 'Edición de productos',
        	'slug' => 'products.edit',
        	'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar productos',
        	'slug' => 'products.destroy',
        	'description' => 'Elmina un producto del sistema',
        ]);

    }
}
