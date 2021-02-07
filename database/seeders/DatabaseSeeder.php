<?php

namespace Database\Seeders;

use App\Models\Acthor;
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

        // $this->call('UsersTableSeeder');
        Acthor::factory(50)->create();
    }
}
