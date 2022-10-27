<?php

namespace Database\Seeders;
use App\Models\Ref_19;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref19Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // ናይ ውልቂ/ብሕቲ
            Ref_19::factory(5)->state(new sequence(
                ['ref_19002' => "ብውልቂ ዝተጠርየ"],
                ['ref_19002' => "ብውርሻ"],
                ['ref_19002' => "ብመንግስቲ ዝተወገነ"],
                ['ref_19002' => "ዘስራሕካዮ ናይ ጤሳ መሬት"],
                ['ref_19002' => "ብነጻ ኣብ ናይ መቕርብ ገዛ"],
             ))->create();
    }
}
