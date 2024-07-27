<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $category1 = new Category;
        $category1->name = "Accion";
        $category1->description = "Categoria basado en Accion, accidentes, desastre naturales";
        $category1->active = true;
        $category1->save();

        $category2 = new Category;
        $category2->name = "Aventuras";
        $category2->description = "Categoria basado en juegos y diversion extrema";
        $category2->active = true;
        $category2->save();
    }
}
