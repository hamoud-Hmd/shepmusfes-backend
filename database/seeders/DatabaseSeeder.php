<?php

namespace Database\Seeders;

use App\Models\President;
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
        $this->call([
            Member_TypeSeed::class,
            MembersSeeder::class,
            PresidentsSeeder::class,
            CommitteesSeeder::class,
        ]);
    }
}
