<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re41;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re41Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ዘራእቲ
        Re41::factory(5)->state(new sequence(
            ['re41002' => "እኽሊ"],
            ['re41002' => "ጥረታት"],
            ['re41002' => "ዘርኢ ዘይቲ"],
            ['re41002' => "ፍረታት"],
            ['re41002' => "ኣሕምልቲ"],
        ))->create();
    }
}
