<?php

use Illuminate\Database\Seeder;
use Dropbox\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name'=>'Documentos',
        ]);
        Category::create([
        	'name'=>'Imagenes',
        ]);
        Category::create([
        	'name'=>'Videos',
        ]);
        Category::create([
        	'name'=>'Archivos',
        ]);

    }
}
