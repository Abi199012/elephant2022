<?php

namespace Database\Seeders;
use App\Models\Ref_22;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref22Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //ምንጪ ማይ ጽሬት ዝስተ ማይ
         Ref_22::factory(2)->state(new sequence(
            ['ref_22002' => "ጽሬቱ ዝተሓለወ"],
            ['ref_22002' => "ጽሬቱ ዘይ-ተሓለወ"],
        ))->create();
    }
}
