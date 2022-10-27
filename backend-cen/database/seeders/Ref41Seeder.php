<?php

namespace Database\Seeders;
use App\Models\Ref_41;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref41Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ስራሕ
        Ref_41::factory(12)->state(new sequence(
            ['ref_41002' => "ሰሪሑ ብኣገባብ ደሞዝ ብዓይነት ዝረክብ"],
            ['ref_41002' => "ስራሕ ዘለዎ ግን ብዝተፈላለየ ምኽንያት ኣብዘን ዝሓለፋ 30 መዓልታት ዘይሰርሐ"],
            ['ref_41002' => "ከይተኸፍለ ኣብ ናይ ስድራ-ቤት ትካል ዝሰርሕ "],
            ['ref_41002' => "ንልምምድ ብዘይክፍሊት ዝሰርሕ"],
            ['ref_41002' => "ሽቅለት-ኣልቦ ኣብ ስራሕ ምድላይ ዝርከብ"],
            ['ref_41002' => "ሽቅለት-ኣልቦ ኣብ ስራሕ ንምድላይ/ንምርካብ ዘይፍትን "],
            ['ref_41002' => "በዓልቲ ቤት"],
            ['ref_41002' => "ኣላይት ገዛ"],
            ['ref_41002' => "ተማሃራይ/ሪት"],
            ['ref_41002' => "ጡረታ ዝወጸ"],
            ['ref_41002' => "ብናይ ብሕቲ ስድራ-ቤታት ወይ ካልእ ምንጪ ዝሕገዙ ኣረጋውያን"],
            ['ref_41002' => "ካልእ"],
            ))->create();
    }
}
