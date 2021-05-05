<?php

namespace Database\Seeders;

use App\Models\President;
use Illuminate\Database\Seeder;

class PresidentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  President::create(['id' => '1','member_id' => '7','committee_id' => '5','created_at' => NULL,'updated_at' => NULL]);
  President::create(['id' => '2','member_id' => '8','committee_id' => '4','created_at' => NULL,'updated_at' => NULL]);
  President::create(['id' => '3','member_id' => '6','committee_id' => '3','created_at' => NULL,'updated_at' => NULL]);
  President::create(['id' => '4','member_id' => '10','committee_id' => '6','created_at' => NULL,'updated_at' => NULL]);
  President::create(['id' => '5','member_id' => '11','committee_id' => '9','created_at' => NULL,'updated_at' => NULL]);
  President::create(['id' => '6','member_id' => '9','committee_id' => '7','created_at' => NULL,'updated_at' => NULL]);
  President::create(['id' => '7','member_id' => '12','committee_id' => '8','created_at' => NULL,'updated_at' => NULL]);
    }
}
