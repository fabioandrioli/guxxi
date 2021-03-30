<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rate;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rate::create([
            'note' => 'ótimo',
            'review' => 'Ótimo profissional, fez o combinado, concluiu o serviço no tempo, pagamento de acordo com o combinado, não falta serviço',
            'user_id' => 2,
            'service_id' => 1,
        ]);

        Rate::create([
            'note' => 'Péssimo',
            'review' => 'Péssimo profissional, falta serviço e não faz o combinado',
            'user_id' => 3,
            'service_id' => 1,
        ]);

        Rate::create([
            'note' => 'Regular',
            'review' => 'Fez o combinado, porém não tem muito conhecimento',
            'user_id' => 4,
            'service_id' => 1,
        ]);
    }
}
