<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re12;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re12Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ቋንቋ
        Re12::factory(14)->state(new sequence(
            ['re12002' => "ትግርኛ"],
            ['re12002' => "ትግረ"],
            ['re12002' => "ሳሆ"],
            ['re12002' => "ብሌን"],
            ['re12002' => "ዓፋር"],
            ['re12002' => "ኩናማ"],
            ['re12002' => "ናራ"],
            ['re12002' => "ሕዳርብ"],
            ['re12002' => "ራሻይዳ"],
            ['re12002' => "ኢንግሊዝ"],
            ['re12002' => "ጣልያን"],
            ['re12002' => "ፍራንስ"],
            ['re12002' => "ኣምሓርኛ"],
            ['re12002' => "ዓረብ"],
        ))->create();
     
    }
}
