<?php

namespace Database\Seeders;
use App\Models\Ref_44;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref44Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ሓላፍነታዊ ስራሕ ወይ ዕዮ ኣብ ቀንዲ ስራሕካ እንታዩ፧
        Ref_44::factory(10)->state(new sequence(
            ['ref_44002' => "ማናጀር"],
            ['ref_44002' => "መምሀር"],
            ['ref_44002' => "ካርበንተር"],
            ['ref_44002' => "ካርበንተር"],
            ['ref_44002' => "ካርበንተር"],
            ['ref_44002' => "ካርበንተር"],
            ['ref_44002' => "ካርበንተር"],
             
        ))->create();
    }
}
