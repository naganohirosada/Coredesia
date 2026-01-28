<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => '長野 弘貞',
            'name_kana'=> 'ナガノ ヒロサダ',
            'email' => 'nagano_hirosada@coredesia.com',
            'password' => Hash::make('n19950201'),
            'last_login_at' => now(),
            'role' => 1,
        ]);
    }
}
