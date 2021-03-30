<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Construtor cívil',
            'description' => 'Construções e reformas em gerais, faço reparo em hidráulica, e instalções elétricas',
            'category_id' => 2,
            'user_id' => 1,
        ]);

        Service::create([
            'name' => 'Cabeleleira',
            'description' => 'Hidratação, escova e alisamento',
            'category_id' => 1,
            'user_id' => 3,
        ]);

        Service::create([
            'name' => 'Progamador de sites',
            'description' => 'Construção de sites e sistemas web',
            'category_id' => 1,
            'user_id' => 5,
        ]);

        Service::create([
            'name' => 'Construção de portão',
            'description' => 'fazemos portões de ferro e aluminio para residencias',
            'category_id' => 1,
            'user_id' => 6,
        ]);

        Service::create([
            'name' => 'Instalador de ar condicionado',
            'description' => 'Instalação, manutenção e limpeza de ar-condicionado',
            'category_id' => 1,
            'user_id' => 4,
        ]);
    }
}
