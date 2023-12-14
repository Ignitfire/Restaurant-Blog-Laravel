<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // création d'un admin pour tester
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('adminadmin'),
            'role' => 'admin'
        ]);

        $users = User::factory()->count(20)->create();

        foreach ($users as $user) {
            Restaurant::factory()
            ->count(5)
            ->for($user)
            ->create();
        }

        $tags = \App\Models\Tag::factory()->count(10)->create();




        /*Restaurant::factory()
        ->count(5)
        ->for(User::factory()->create())
        ->create();*/

        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
