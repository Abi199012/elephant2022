<?php

namespace Database\Seeders;
use App\Models\Ref_49;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref49Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //መስፈሪ መዐቀኒ መጠን (ፍርያት) እንስሳ
        Ref_49::factory(3)->state(new sequence(
            ['ref_49002' => "ኪሎ"],
            ['ref_49002' => "ሊትሮ"],
            ['ref_49002' => "ክክክክ"],
        ))->create();
    }
}
