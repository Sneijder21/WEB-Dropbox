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
    	// FIles Permissions
        Permission::create([
        	'name'=>		'Ver archivos',
        	'slug'=>		'admin.files.index',
        	'description'=>	'Ver toda la lista de los archivos'
        ]);

        Permission::create([
        	'name'=>		'Subir archivos',
        	'slug'=>		'admin.files.create ',
        	'description'=>	'Subir un archivo al sistema'
        ]);


        Permission::create([
        	'name'=>		'Ver detalle de cada archivo',
        	'slug'=>		'admin.files.id',
        	'description'=>	'Ver el detalle de un archivo'
        ]);

        Permission::create([
        	'name'=>		'Acceder al archivos',
        	'slug'=>		'admin.files.show',
        	'description'=>	'Ver informacion general de cada archivo'
        ]);

        Permission::create([
        	'name'=>		'Ocultar un archivo',
        	'slug'=>		'admin.files.hidde',
        	'description'=>	'Ocultar un archivo de la lista'
        ]);

        Permission::create([
        	'name'=>		'Eliminar un archivo',
        	'slug'=>		'admin.files.delete',
        	'description'=>	'Eliminar un archivo'
        ]);

        // User Permissions
        Permission::create([
            'name'=>        'Ver la lista de los usuarios',
            'slug'=>        'admin.users.index',
            'description'=> 'ver todos los usuarios en el sistema',
        ]);

        Permission::create([
            'name'=>        'Crear un usuario',
            'slug'=>        'admin.users.create',
            'description'=> 'crear un usuario en el sistema',
        ]);

        Permission::create([
            'name'=>        'Mostrar detalle del usuario',
            'slug'=>        'admin.users.show',
            'description'=> 'Detalle de un usuario en el sistema',
        ]);

        Permission::create([
            'name'=>        'Edicion de un usuario',
            'slug'=>        'admin.users.edit',
            'description'=> 'Editar datos del usuario en el sistema',
        ]);

        Permission::create([
            'name'=>        'Eliminar Usuario',
            'slug'=>        'admin.users.destroy',
            'description'=> 'Eliminar usuario en el sistema',
        ]);

    }
}
