<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re36;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re36Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ናይ ውልቂ/ብሕቲ
        Re36::factory(5)->state(new sequence(
            ['re36002' => "ብውልቂ ዝተጠርየ"],
            ['re36002' => "ብውርሻ"],
            ['re36002' => "ብመንግስቲ ዝተወገነ"],
            ['re36002' => "ዘስራሕካዮ ናይ ጤሳ መሬት"],
            ['re36002' => "ብነጻ ኣብ ናይ መቕርብ ገዛ"],
         ))->create();
    }
}
