<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;
class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::create([
            'reply' => 'Para resolver este transtorno, entre em contato com a empresa',
            'rate_id' => 2,
            'service_id' => 1,
        ]);

        Answer::create([
            'reply' => 'Fiz o combinado',
            'rate_id' => 3,
            'service_id' => 1,
        ]);
    }
}
