<?php

namespace Database\Seeders;
use App\Models\Ref_18;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref18Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //ዓይነት ቤት 
       Ref_18::factory(12)->state(new sequence(
        ['ref_18002' => "ህድሞ"],
        ['ref_18002' => "ኣጉዶ"],
        ['ref_18002' => "መረባዕ/ጊድጊዳ"],
        ['ref_18002' => "ሰርቪስ/ተራ ገዛ"],
        ['ref_18002' => "ቪላ/ሓውሲ ቪላ"],
        ['ref_18002' => "ርሻን/ኣባርታማ"],
        ['ref_18002' => "ዳስ/ኦሽ"],
        ['ref_18002' => "ኮንቴይነር"],
        ['ref_18002' => "ካብ ፕላስቲክ/ካርቶን"],
        ['ref_18002' => "ኣግነት"],
        ['ref_18002' => "ቴንዳ"],
        ['ref_18002' => "ካልእ"]
    ))->create();
    }
}
