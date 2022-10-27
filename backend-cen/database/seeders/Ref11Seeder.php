<?php

namespace Database\Seeders;
use App\Models\Ref_11;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref11Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // ዝምዳና ምስ ሓላፊ ስድራ
            Ref_11::factory(11)->state(new sequence(
                ['ref_11002' => "ሓላፊ/ት ስድራ ቤት" ],
                ['ref_11002' => "በዓልቲ ቤት" ],
                ['ref_11002' => "ወዲ ወይ ጓል ሓላፊ/ት ን በዓልቲ ቤት" ],
                ['ref_11002' => "ወዲ ወይ ጓል ሓላፊ/ት ጠራይ" ],
                ['ref_11002' => "ወዲ ወይ ጓል በዓል/ቲ ቤት ጥራይ" ],
                ['ref_11002' => "ኣቦ ወይ ኣደ ሓላፊ/ት ወይ በዓል/ቲ ቤት" ],
                ['ref_11002' => "ሓዊ ወይ ሓውቲ ሓላፊ/ት ወይ በዓል/ቲ ቤት" ],
                ['ref_11002' => "ሰብኣይ ጓሉ/ላ ወይ ስይቲ ወዱ/ዳ ንሓላፊ/ት"  ],
                ['ref_11002' => "ደቂ ደቁ/ቃ ንሓላፊ/ት" ],
                ['ref_11002' => "ካልእ ዘመድ" ],
                ['ref_11002' => "ዘመድ ዘይኮነ" ],
                    
            ))->create();
    }
}
