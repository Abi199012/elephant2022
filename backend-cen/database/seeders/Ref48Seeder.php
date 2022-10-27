<?php

namespace Database\Seeders;
use App\Models\Ref_48;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref48Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ውጽኢት (ፍርያት) እንስሳ
        Ref_48::factory(7)->state(new sequence(
            ['ref_48002' => "ጸባ"],
            ['ref_48002' => "ጠስሚ"],
            ['ref_48002' => "ርግኦ"],
            ['ref_48002' => "ካልእ ውጽኢት ጸባ"],
            ['ref_48002' => "እንቋቕሖ"],
            ['ref_48002' => "መዓር"],
            ['ref_48002' => "ካልእ ጸሓፍ"],
        ))->create();
    }
}


