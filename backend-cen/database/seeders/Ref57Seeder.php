<?php

namespace Database\Seeders;
use App\Models\Ref_57;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref57Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ስድራቤትካ ኣብ ሕርሻዊ ንጥፈታት ወይ ምስ ሕርሻ ዝተኣሳሰር ንጥፈታት ትሳተፍ ዶ፧
        Ref_57::factory(4)->state(new sequence(
            ['ref_57002' => "እወ ኣብ ማሕረስ"],
            ['ref_57002' => "እወ ኣብ ትካል ናይ ሕርሻ"],
            ['ref_57002' => "እወ ኣብ ማሕረስን ትካል ናይ ሕርሻን"],
            ['ref_57002' => "ኣይፋል"],
        ))->create();
    }
}

