<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fábio Gilberto Andrioli Goncalves',
            'email' => 'fabio.drioli@gmail.com',
            'password' => bcrypt('12345678'),
            'datebirth' => '1993-11-16',
            'cpf' => '888888888-88',
            'role_id' => '3',
        ]);

        User::create([
            'name' => 'Larissa Soriani Barreto',
            'email' => 'larissa@gmail.com',
            'password' => bcrypt('12345678'),
            'datebirth' => '1996-08-23',
            'cpf' => '888888888-88',
            'role_id' => '1',
        ]);

        User::create([
            'name' => 'Ana Clara Soriani',
            'email' => 'ana.clara@gmail.com',
            'password' => bcrypt('12345678'),
            'datebirth' => '2011-04-27',
            'cpf' => '888888888-88',
            'role_id' => '1',
        ]);

        User::create([
            'name' => 'Isadora Soriani Andrioli',
            'email' => 'isadora.andrioli@gmail.com',
            'password' => bcrypt('12345678'),
            'datebirth' => '2019-02-07',
            'cpf' => '888888888-88',
            'role_id' => '1',
        ]);

        User::create([
            'name' => 'Luiz Henrique Moraes Floriano',
            'email' => 'luiz.moraes@gmail.com',
            'password' => bcrypt('12345678'),
            'datebirth' => '1993-12-04',
            'cpf' => '888888888-88',
            'role_id' => '1',
        ]);

        User::create([
            'name' => 'Alexandre de Moraes',
            'email' => 'alexandre.moraes@gmail.com',
            'password' => bcrypt('12345678'),
            'datebirth' => '1993-12-04',
            'cpf' => '888888888-88',
            'role_id' => '1',
        ]);

        User::create([
            'name' => 'Daniel Gusmão',
            'email' => 'daniel.gusao@gmail.com',
            'password' => bcrypt('12345678'),
            'datebirth' => '1993-12-04',
            'cpf' => '888888888-88',
            'role_id' => '1',
        ]);
    }
}
