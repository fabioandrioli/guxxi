<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Telephone;
class TelephoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Telephone::create([
            'number' => '98400-2449',
            'service_id' => 1,
        ]);

        Telephone::create([
            'number' => '3425-2525',
            'service_id' => 1,
        ]);
    }
}
