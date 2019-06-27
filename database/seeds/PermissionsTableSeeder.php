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





    }
}
