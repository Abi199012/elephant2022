<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re47;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re47Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ስድራቤትካ ኣብ ሕርሻዊ ንጥፈታት ወይ ምስ ሕርሻ ዝተኣሳሰር ንጥፈታት ትሳተፍ ዶ፧
        Re47::factory(4)->state(new sequence(
            ['re47002' => "እወ ኣብ ማሕረስ"],
            ['re47002' => "እወ ኣብ ትካል ናይ ሕርሻ"],
            ['re47002' => "እወ ኣብ ማሕረስን ትካል ናይ ሕርሻን"],
            ['re47002' => "ኣይፋል"],
           
        ))->create();
    }
}


