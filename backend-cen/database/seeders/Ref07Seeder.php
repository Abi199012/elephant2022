<?php

namespace Database\Seeders;
use App\Models\Ref_07;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref07Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ref_07::factory(5)->state(new sequence(
            ['ref_07002' => "ስድራቤት"],
            ['ref_07002' => "ሆቴል/ሆስቴል"],
            ['ref_07002' => "ናይ ሓባር መንበሪ"],
            ['ref_07002' => "ሰበኽ ሳግም"],
            ['ref_07002' => "ቤት ዘይብሉ"],
        ))->create();
    }
}
