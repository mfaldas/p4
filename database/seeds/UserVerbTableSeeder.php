<?php

use Illuminate\Database\Seeder;
use App\User;

class UserVerbTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = ['Sexy Beast', 'sexybeast@gmail.com', 'sexybeast' ];

        $user = new User;
        $user->name = $info[0];
        $user->email = $info[1];
        $user->password = $info[2];
        $user->save();
    }
}
