<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FavoritesTableSeeder::class);
        $this->call(VerbsTableSeeder::class);
        $this->call(FavoriteVerbTable::class);
    }
}
