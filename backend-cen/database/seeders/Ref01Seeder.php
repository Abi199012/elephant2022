<?php

namespace Database\Seeders;
use App\Models\Ref_01;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ref_01::factory(6)->state(new sequence(
            ['ref_01002' => "ዞባ ደቡብ",'ref_01003' => '1'],
            ['ref_01002' => "ዞባ ማእከል",'ref_01003' => '2'],
            ['ref_01002' => "ዞብ ዓንሰባ",'ref_01003' => '3'],
            ['ref_01002' => "ዞባ ጋሽ ባርካ",'ref_01003' => '4'],
            ['ref_01002' => "ዞባ ሰሜናዊ ቀይሕ ባሕሪ",'ref_01003' => '5'],
            ['ref_01002' => "ዞባ ደቡባዊ ቀይሕ ባሕሪ",'ref_01003' => '6']
        ))->create();
    }
}
