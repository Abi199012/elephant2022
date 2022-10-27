<?php

namespace Database\Seeders;
use App\Models\Ref_12;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref12Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         // ሃይማኖት
         Ref_12::factory(6)->state(new sequence(
            ['ref_12002' => "ኦርቶዶክስ"],
            ['ref_12002' => "ካቶሊክ"],
            ['ref_12002' => "ከኒሻ"],
            ['ref_12002' => "ምስልምና"],
            ['ref_12002' => "ካልእ እምነት"],
            ['ref_12002' => "ሃይማኖት ዘይብሉ"]
        ))->create();
    }
}
