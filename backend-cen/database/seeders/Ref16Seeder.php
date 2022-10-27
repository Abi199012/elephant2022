<?php

namespace Database\Seeders;
use App\Models\Ref_16;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref16Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //nationaldutynotdone
        Ref_16::factory(2)->state(new sequence(
            ['ref_16002' => "ኣብ ስደት ስለ ዘሎ"],
            ['ref_16002' => "ዕድሚኡ ዘይኣኸለ"]
        ))->create();
    }
}
