<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re23;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re23Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ቤት 
        Re23::factory()->state(new sequence(
            ['re23002' => "ህድሞ"],
            ['re23002' => "ኣጉዶ"],
            ['re23002' => "መረባዕ/ጊድጊዳ"],
            ['re23002' => "ሰርቪስ/ተራ ገዛ"],
            ['re23002' => "ቪላ/ሓውሲ ቪላ"],
            ['re23002' => "ርሻን/ኣባርታማ"],
            ['re23002' => "ዳስ/ኦሽ"],
            ['re23002' => "ኮንቴይነር"],
            ['re23002' => "ካብ ፕላስቲክ/ካርቶን"],
            ['re23002' => "ኣግነት"],
            ['re23002' => "ቴንዳ"],
            ['re23002' => "ካልእ"]
        ))->create();
    }
}
