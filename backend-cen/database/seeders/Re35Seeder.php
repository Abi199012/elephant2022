<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re35;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re35Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ስራሕ

        Re35::factory(12)->state(new sequence(
            ['re35002' => "ሰሪሑ ብኣገባብ ደሞዝ ብዓይነት ዝረክብ"],
            ['re35002' => "ስራሕ ዘለዎ ግን ብዝተፈላለየ ምኽንያት ኣብዘን ዝሓለፋ 30 መዓልታት ዘይሰርሐ"],
            ['re35002' => "ከይተኸፍለ ኣብ ናይ ስድራ-ቤት ትካል ዝሰርሕ "],
            ['re35002' => "ንልልምምድ ብዘይክፍሊት ዝሰርሕ"],
            ['re35002' => "ሽቅለት-ኣልቦ ኣብ ስራሕ ምድላይ ዝርከብ"],
            ['re35002' => "ሽቅለት-ኣልቦ ኣብ ስራሕ ንምድላይ/ንምርካብ ዘይፍትን "],
            ['re35002' => "በዓልቲ ቤት"],
            ['re35002' => "ኣላይት ገዛ"],
            ['re35002' => "ተማሃራይ/ሪት"],
            ['re35002' => "ጡረታ ዝወጸ"],
            ['re35002' => "ብናይ ብሕቲ ስድራ-ቤታት ወይ ካልእ ምንጪ ዝሕገዙ ኣረጋውያን"],
            ['re35002' => "ካልእ"],
        ))->create();
    }
}
