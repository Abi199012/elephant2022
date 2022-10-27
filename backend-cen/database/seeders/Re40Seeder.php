<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re40;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re40Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ውጽኢት (ፍርያት) እንስሳ
        
        Re40::factory(7)->state(new sequence(
            ['re40002' => "ጸባ"],
            ['re40002' => "ጠስሚ"],
            ['re40002' => "ርግኦ"],
            ['re40002' => "ካልእ ውጽኢት ጸባ"],
            ['re40002' => "እንቋቕሖ"],
            ['re40002' => "መዓር"],
            ['re40002' => "ካልእ ጸሓፍ"],
        ))->create();
    }
}


