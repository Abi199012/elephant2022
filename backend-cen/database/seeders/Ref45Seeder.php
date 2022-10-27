<?php

namespace Database\Seeders;
use App\Models\Ref_45;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref45Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ቀንዲ ስራሕካ እንታይ ዓይነት እዩ፧
        Ref_45::factory(20)->state(new sequence(
            ['ref_45002' => "ጽሓፊ"],
            ['ref_45002' => "ኣሳሳይ/ት"],
            ['ref_45002' => "ጽጽጽጽ"],
            ['ref_45002' => "ጽጽጽጽ"],
            ['ref_45002' => "ጽጽጽጽ"],
            ['ref_45002' => "ጽጽጽጽ"],
            ['ref_45002' => "ጽጽጽጽ"],
            ['ref_45002' => "ጽጽጽጽ"],
            ['ref_45002' => "ጽጽጽጽ"],
            ['ref_45002' => "ጽጽጽጽ"],
        ))->create();
    }
}
