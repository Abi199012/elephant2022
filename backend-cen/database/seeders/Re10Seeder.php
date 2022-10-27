<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re10;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        // ሃይማኖት
        Re10::factory(6)->state(new sequence(
            ['re10002' => "ኦርቶዶክስ"],
            ['re10002' => "ካቶሊክ"],
            ['re10002' => "ከኒሻ"],
            ['re10002' => "ምስልምና"],
            ['re10002' => "ካልእ እምነት"],
            ['re10002' => "ሃይማኖት ዘይብሉ"]
        ))->create();
    }
}
