<?php

namespace Database\Seeders;
use App\Models\Ref_55;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref55Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ውጽኢት ኣግራብ
        Ref_55::factory(2)->state(new sequence(
            ['ref_55002' => "ዕንጸይቲ ንጸዓት"],
            ['ref_55002' => "ዕንጸይቲ ንመስርሒ ህንጻ"],
            ['ref_55002' => "ዕንጸይቲ ንካልእ መዓላ"],
            ['ref_55002' => "ከሰል (ፈሓም)"],
            ['ref_55002' => "ውጽኢታት ኣግራብ (ዕጣን ዕንዲዳ)"],
        ))->create();
    }
}


