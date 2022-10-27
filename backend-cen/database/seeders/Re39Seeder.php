<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re39;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re39Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ዓይነት ደም
        Re39::factory(8)->state(new sequence(
            ['re39002' => "A+"],
            ['re39002' => "A-"],
            ['re39002' => "B+"],
            ['re39002' => "AB"],
            ['re39002' => "AB"],
            ['re39002' => "O+"],
            ['re39002' => "O-"],
            ['re39002' => "ኣይፈልጥክዎን"],
        ))->create();
   }
}
