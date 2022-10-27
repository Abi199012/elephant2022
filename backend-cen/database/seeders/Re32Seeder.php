<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re32;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re32Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //nationaldutynotdone
         Re32::factory(2)->state(new sequence(
            ['re32002' => "ኣብ ስደት ስለ ዘሎ"],
            ['re32002' => "ዕድሚኡ ዘይኣኸለ"]
        ))->create();

    }
}
