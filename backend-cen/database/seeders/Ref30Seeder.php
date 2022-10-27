<?php

namespace Database\Seeders;
use App\Models\Ref_30;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref30Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // ዓይነት ሕማም
          Ref_30::factory(10)->state(new sequence(
            ['ref_30002' => "ሕማም 1" ,'ref_30003' =>'1' ],
            ['ref_30002' => "ሕማም 2" ,'ref_30003' =>'1' ],
            ['ref_30002' => "ሕማም 3" ,'ref_30003' =>'1' ],
            ['ref_30002' => "ሕማም 4" ,'ref_30003' =>'1' ],
            ['ref_30002' => "ሕማም 5" ,'ref_30003' =>'1' ],
            ['ref_30002' => "ሕማም 6" ,'ref_30003' =>'2' ],
            ['ref_30002' => "ሕማም 7" ,'ref_30003' =>'2' ],
            ['ref_30002' => "ሕማም 8" ,'ref_30003' =>'2' ],
            ['ref_30002' => "ሕማም 9" ,'ref_30003' =>'2' ],
            ['ref_30002' => "ሕማም 10",'ref_30003' =>'2' ],
        ))->create();
    }
}
