<?php

namespace Database\Seeders;

use App\Models\Family;
use App\Models\Orphans;
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
        User::factory(1)->create();
        // $users = User::all();

        // foreach ($users as $user) {
        //     Family::factory(5)->create([
        //         'user_id' => $user->id,
        //     ]);
        // }
        // $families = Family::all();

        // foreach ($families as $family) {
        //     Orphans::factory(3)->create([
        //         'family_id' => $family->id,
        //     ]);
        // }
    }
}
