<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re45;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re45Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ውጽኢት  ኣግራብ
        Re45::factory(5)->state(new sequence(
            ['re45002' => "ዕንጸይቲ ንጸዓት"],
            ['re45002' => "ዕንጸይቲ ንመስርሒ ህንጻ"],
            ['re45002' => "ዕንጸይቲ ንካልእ መዓላ"],
            ['re45002' => "ከሰል (ፈሓም)"],
            ['re45002' => "ውጽኢታት ኣግራብ (ዕጣን ዕንዲዳ)"],
        ))->create();

        
    }
}

