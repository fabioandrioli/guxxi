<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Site::create([
            'link' => 'www.linkedin.com/in/fábio-gilberto-andrioli',
            'description' => 'Acesse meu linkdlin',
            'service_id' => 1,
        ]);
    }
}
