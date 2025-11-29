<?php

namespace Database\Seeders;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::factory()->count(3)->active()->create();
        Item::factory()->count(3)->inactive()->create();
        //Active Item For testing
        Item::create(['name' => 'Active Demo', 'status' => 1]);
        //Old Active Item For testing
        Item::factory()->active()->create([
            'name' => 'Old Active Item',
            'created_at' => now()->subDays(20),
            'updated_at' => now()->subDays(20),
        ]);
    }
}
