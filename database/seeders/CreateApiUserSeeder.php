<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateApiUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'SUNU_API',
            'email' => 'app@sunu.com',
            'password' => Hash::make('JN6dZtX3x7kHrPQ'),
        ]);

        $user->generateToken();
    }
}
