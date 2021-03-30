<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
            ServiceSeeder::class,
            AddressSeeder::class,
            TelephoneSeeder::class,
            AlbumSeeder::class,
            SiteSeeder::class,
            RateSeeder::class,
            AnswerSeeder::class,
        ]);
    }
}
