<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use App\Models\Restaurant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Restaurant::factory(10)->hasMenuItems(rand(5, 30))->create();
        $this->command->info('Restaurant Seeder Completed');

        User::factory(100)->hasOrders(rand(1, 100))->create();
        $this->command->info('User Seeder Completed');

        OrderItem::factory(200)->create();
        $this->command->info('Order Items Seeder Completed');
    }
}
