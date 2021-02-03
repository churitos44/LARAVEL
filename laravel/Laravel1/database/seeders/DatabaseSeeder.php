<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;
use App\Models\User;
use App\Models\Group;
use App\Models\Profile;
use App\Models\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Level::factory(5)->create();
        User::factory(3)->create();
        Group::factory(5)->create();

        //Relacion 1 - 1 obligado a instanciar en sus propios Seeders
        $this->call(ProfileSeeder::class);
        $this->call(LocationSeeder::class);

    }
}
