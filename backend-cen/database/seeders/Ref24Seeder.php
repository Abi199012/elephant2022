<?php

namespace Database\Seeders;
use App\Models\Ref_24;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref24Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // house_unit_type_lighting
        Ref_24::factory(9)->state(new sequence(
            ['ref_24002' => "የብሉን"],
            ['ref_24002' => "ኤለትሪክ ናይ ብሕቲ"],
            ['ref_24002' => "ኤለትሪክ ናይ ሓባር"],
            ['ref_24002' => "ናይ ውልቂ ጸሓያዊ ጸዓት"],
            ['ref_24002' => "ዓዳዊ ጸሓያዊ ጸዓት"],
            ['ref_24002' => "ላምባ"],
            ['ref_24002' => "ፋኑስ/ቬትሮ-ማክስ"],
            ['ref_24002' => "ጀነሬተር"],
            ['ref_24002' => "ካልእ"]
        ))->create();
    }
}
