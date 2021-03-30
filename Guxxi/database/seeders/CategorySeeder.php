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
            'tags' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Construção',
            'tags' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Mecanico',
            'tags' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Gastronomia',
            'tags' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Higiene',
            'tags' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Saúde',
            'tags' => 'salao de beleza',
        ]);

        Category::create([
            'name' => 'Outros',
            'tags' => 'salao de beleza',
        ]);
    }
}
