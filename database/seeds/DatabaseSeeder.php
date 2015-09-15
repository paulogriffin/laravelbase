<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use App\Workout;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        //Workout::truncate();
        User::truncate();

        //factory(Workout::class, 550)->create();
        factory(User::class, 10)->create();

        Model::reguard();
    }
}
