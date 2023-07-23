<?php

namespace Database\Seeders;

use App\Models\Regional;
use App\Models\Resource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Regional::all()->each(function($r) {
            Resource::factory()->count(5)->create(['regional_id' => $r->id]);
        });
    }
}
