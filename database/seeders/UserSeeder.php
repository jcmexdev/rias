<?php

namespace Database\Seeders;

use App\Models\Regional;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Regional::all()->each(function($r) {
            User::factory()->create(['regional_id' => $r->id]);
        });
    }
}
