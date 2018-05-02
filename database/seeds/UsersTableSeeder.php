<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate(
            ['email' => 'marcfaldas@gmail.com', 'name' => 'Marc Faldas', 'editAccess' => true],
            ['password' => Hash::make('SleepIsGood')
            ]);

        $user = User::updateOrCreate(
            ['email' => 'susanbuck@gmail.com', 'name' => 'Susan Buck', 'editAccess' => true],
            ['password' => Hash::make('PlayIsGood')
            ]);

        $user = User::updateOrCreate(
            ['email' => 'andrewfaldas@gmail.com', 'name' => 'Andrew Faldas', 'editAccess' => false],
            ['password' => Hash::make('FoodIsGood')
            ]);

        $user = User::updateOrCreate(
            ['email' => 'wat_a_champion@gmail.com', 'name' => 'わたるうちだ', 'editAccess' => false],
            ['password' => Hash::make('おいしい')
            ]);

        $user = User::updateOrCreate(
            ['email' => 'geraldcallao@gmail.com', 'name' => 'Gerald Callao', 'editAccess' => false],
            ['password' => Hash::make('Sabad')
            ]);
    }
}
