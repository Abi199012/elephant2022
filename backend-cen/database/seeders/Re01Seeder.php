<?php

namespace Database\Seeders;

use App\Models\Re01;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class Re01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Re01::factory(6)->state(new sequence(
            ['re01002' => "ዞባ ደቡብ",'re01003' => '1'],
            ['re01002' => "ዞባ ማእከል",'re01003' => '2'],
            ['re01002' => "ዞብ ዓንሰባ",'re01003' => '3'],
            ['re01002' => "ዞባ ጋሽ ባርካ",'re01003' => '4'],
            ['re01002' => "ዞባ ሰሜናዊ ቀይሕ ባሕሪ",'re01003' => '5'],
            ['re01002' => "ዞባ ደቡባዊ ቀይሕ ባሕሪ",'re01003' => '6']
        ))->create();
    }
}

