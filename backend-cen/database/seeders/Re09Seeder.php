<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re09;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re09Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ዝምዳና ምስ ሓላፊ ስድራ
        Re09::factory(11)->state(new sequence(
            ['re09002' => "ሓላፊ/ት ስድራ ቤት"],
            ['re09002' => "በዓልቲ ቤት"],
            ['re09002' => "ወዲ ወይ ጓል ሓላፊ/ት ን በዓልቲ ቤት"],
            ['re09002' => "ወዲ ወይ ጓል ሓላፊ/ት ጠራይ"],
            ['re09002' => "ወዲ ወይ ጓል በዓል/ቲ ቤት ጥራይ"],
            ['re09002' => "ኣቦ ወይ ኣደ ሓላፊ/ት ወይ በዓል/ቲ ቤት"],
            ['re09002' => "ሓዊ ወይ ሓውቲ ሓላፊ/ት ወይ በዓል/ቲ ቤት"],
            ['re09002' => "ሰብኣይ ጓሉ/ላ ወይ ስይቲ ወዱ/ዳ ንሓላፊ/ት" ],
            ['re09002' => "ደቂ ደቁ/ቃ ንሓላፊ/ት"],
            ['re09002' => "ካልእ ዘመድ"],
            ['re09002' => "ዘመድ ዘይኮነ"],
                
        ))->create();
    }
}
