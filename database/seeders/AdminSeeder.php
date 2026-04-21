<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['nrp' => '12345678'],
            [
                'name' => 'Administrator',
                'email' => 'admin@simtik-poldadiy.go.id',
                'nrp' => '12345678',
                'password' => Hash::make('djumadi_gantenk'),
                'role' => 'admin',
            ]
        );
    }
}
