<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re08;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re08Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ዓይነት ሕማማት
        Re08::factory(6)->state(new sequence(
            ['re08002' => "ኮሮና",'re08003' => 1],
            ['re08002' => "ኤች ኣይ ቪ",'re08003' => 1],
            ['re08002' => "ቲቪ",'re08003' => 1],
            ['re08002' => "ሽኮርያ",'re08003' => 2],
            ['re08002' => "ኣዝማ",'re08003' => 2],
            ['re08002' => "ደም ብዝሒ",'re08003' => 2],
           
           
       
        ))->create();
    }
}
