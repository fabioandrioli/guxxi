<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Estética',
            'tag' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Construção',
            'tag' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Mecanico',
            'tag' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Gastronomia',
            'tag' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Higiene',
            'tag' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Saúde',
            'tag' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Outros',
            'tag' => 'salao de beleza',
        ]);
    }
}
