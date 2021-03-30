<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'Country' => 'Brasil',
            'state' => 'Paraná',
            'city' => 'Paranaguá',
            'street' => 'Odalício Freitas Gabriel',
            'district' => 'São Vicente',
            'number' => '92 B',
            'zipcode' => '83209-190',
            'Complement' => 'Casa',
            'user_id' => 1,
        ]);

        Address::create([
            'Country' => 'Brasil',
            'state' => 'Paraná',
            'city' => 'Matinhos',
            'street' => 'Avenida Beira Mar',
            'district' => 'Balneário Riveira',
            'number' => '101',
            'zipcode' => '83260-000',
            'Complement' => 'Casa',
            'user_id' => 1,
            'service_id' => 1,
        ]);

        Address::create([
            'Country' => 'Brasil',
            'state' => 'Paraná',
            'city' => 'Morretes',
            'street' => 'Praça Rocha Pombo',
            'district' => 'Centro',
            'number' => '101',
            'zipcode' => '83350-000',
            'Complement' => 'Casa',
            'user_id' => 2,
        ]);

        Address::create([
            'country' => 'Brasil',
            'state' => 'Paraná',
            'city' => 'Morretes',
            'street' => 'Praça Rocha Pombo',
            'district' => 'Centro',
            'number' => '101',
            'zipcode' => '83350-000',
            'Complement' => 'Casa',
            'user_id' => 3,
        ]);
    }
}
