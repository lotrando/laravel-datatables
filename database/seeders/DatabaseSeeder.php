<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\DepartmentTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();

        $this->call([
            DepartmentTableSeeder::class
        ]);
    }
}
