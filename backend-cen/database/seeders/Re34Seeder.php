<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re34;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re34Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ኣቆጻጽራ ስራሕ

        Re34::factory(10)->state(new Sequence(
            ['re34002' => "ሰራሕተኛታ ዘለዋ ኣስራሒ"],
            ['re34002' => "ሰራሕተኛታት ዝይብሉ ኣስራሒ"],
            ['re34002' => "ኣብ ናይ ብሕቲ ትካል ዝሰርሕ"],
            ['re34002' => "ናይ መንግስቲ ሰራሕተኛ(ወተሃደራዊን ዘይወተሃደራውን"],
            ['re34002' => "ኣብ ናይ መንግስትን ብብሕታውያን ዝውነን ትካል ዝሰርሕ"],
            ['re34002' => "ናይ ውዱብ ሕቡራት ሃገራት ወይ ናይ ካልእ መንግስታት ውድባት ስራሕተኛ"],
            ['re34002' => "ኣብ ዘይመንግስታዊ ውድብ ሰራሕተኛ"],
            ['re34002' => "ኣብ ናይ ስድራቤት ትካል ዝሰርሕ"],
            ['re34002' => "ንልምምድ ብዘይክፍሊት ዝሰርሕ"],
            ['re34002' => "ካልእ"]
   
        ))->create();
    }
}
