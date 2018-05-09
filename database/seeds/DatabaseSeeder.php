<?php

/**
 * UserVerb Pivot Table Seeder
 * Initially empty because user fills its.
 * Created by: Marc-Eli Faldas
 * Last Modified: 5/08/2018
 */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $this->call(VerbsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserVerbTableSeeder::class);
    }
}
