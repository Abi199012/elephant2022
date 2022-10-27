<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory(1)->state(new sequence(
            [
                'name' => "dev",
                'username' => "dev@cen.com",
                'password' => "$10$.uF3frg.lE8NwnbgOOqTq.eEW6ReDf8wCPCWsvmCql3J06NzCLO52",
                'enum_id' => "1"
            ]
      
           ))->create();
    }
}
