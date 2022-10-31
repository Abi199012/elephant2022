<?php

namespace Database\Seeders;
use App\Models\Ref_40;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref40Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ኣቆጻጽራ ስራሕ
        Ref_40::factory(10)->state(new sequence(
            ['ref_40002' => "ሰራሕተኛታ ዘለዋ ኣስራሒ"],
            ['ref_40002' => "ሰራሕተኛታት ዝይብሉ ኣስራሒ"],
            ['ref_40002' => "ኣብ ናይ ብሕቲ ትካል ዝሰርሕ"],
            ['ref_40002' => "ናይ መንግስቲ ሰራሕተኛ ወተሃደራዊን ዘይወተሃደራውን"],
            ['ref_40002' => "ኣብ ናይ መንግስትን ብብሕታውያን ዝውነን ትካል ዝሰርሕ"],
            ['ref_40002' => "ናይ ውዱብ ሕቡራት ሃገራት ወይ ናይ ካልእ መንግስታት ውድባት ስራሕተኛ"],
            ['ref_40002' => "ኣብ ዘይመንግስታዊ ውድብ ሰራሕተኛ"],
            ['ref_40002' => "ኣብ ናይ ስድራቤት ትካል ዝሰርሕ"],
            ['ref_40002' => "ንልምምድ ብዘይክፍሊት ዝሰርሕ"],
            ['ref_40002' => "ካልእ"]
            ))->create();
    }
}
