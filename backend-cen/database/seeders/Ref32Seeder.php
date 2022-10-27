<?php

namespace Database\Seeders;
use App\Models\Ref_32;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref32Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ምኽንያት ስንክልና
        Ref_32::factory(9)->state(new sequence(
            ['ref_32002' => "ከምኡ ኢሉ/ኢላ ተወሊዳ"],
            ['ref_32002' => "ሓደጋ"],
            ['ref_32002' => "ውግእ"],
            ['ref_32002' => "ነተጉቲ/ቦንባ"],
            ['ref_32002' => "ምልማስ ፓልዮ ውሲኽካ"],
            ['ref_32002' => "ቁምጥና"],
            ['ref_32002' => "ዓሶ"],
            ['ref_32002' => "ካልእ ሕማማት"],
            ['ref_32002' => "ዓሶ"],
        
        ))->create();
    }
}
