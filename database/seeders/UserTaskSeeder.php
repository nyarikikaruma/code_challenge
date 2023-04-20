<?php

namespace Database\Seeders;

use App\Models\User_task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User_task::factory()->count(20)->create();
        
    }
}
