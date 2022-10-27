<?php

namespace Database\Seeders;
use App\Models\Ref_17;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref17Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // ቋንቋ
           Ref_17::factory(14)->state(new sequence(
            ['ref_17002' => "ትግርኛ"],
            ['ref_17002' => "ትግረ"],
            ['ref_17002' => "ሳሆ"],
            ['ref_17002' => "ብሌን"],
            ['ref_17002' => "ዓፋር"],
            ['ref_17002' => "ኩናማ"],
            ['ref_17002' => "ናራ"],
            ['ref_17002' => "ሕዳርብ"],
            ['ref_17002' => "ራሻይዳ"],
            ['ref_17002' => "ኢንግሊዝ"],
            ['ref_17002' => "ጣልያን"],
            ['ref_17002' => "ፍራንስ"],
            ['ref_17002' => "ኣምሓርኛ"],
            ['ref_17002' => "ዓረብ"],
        ))->create();
    }
}
