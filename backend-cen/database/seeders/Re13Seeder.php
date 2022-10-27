<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re13;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re13Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ጾታ
        Re13::factory(2)->state(new sequence(
            ['re13002' => "ኣን"],
            ['re13002' => "ተባ"]
        ))->create();
    }
}
