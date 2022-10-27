<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re26;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re26Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // house_unit_type_lighting
        Re26::factory(9)->state(new sequence(
            ['re26002' => "የብሉን"],
            ['re26002' => "ኤለትሪክ ናይ ብሕቲ"],
            ['re26002' => "ኤለትሪክ ናይ ሓባር"],
            ['re26002' => "ናይ ውልቂ ጸሓያዊ ጸዓት"],
            ['re26002' => "ዓዳዊ ጸሓያዊ ጸዓት"],
            ['re26002' => "ላምባ"],
            ['re26002' => "ፋኑስ/ቬትሮ-ማክስ"],
            ['re26002' => "ጀነሬተር"],
            ['re26002' => "ካልእ"]
        ))->create();
    }
}
