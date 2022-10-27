<?php

namespace Database\Seeders;
use App\Models\Ref_51;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref51Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ዘራእቲ መስፈሪ መዐቀኒ መጠን
        Ref_51::factory(3)->state(new sequence(
            ['ref_51002' => "ኪሎ"],
            ['ref_51002' => "ኩንታል"],
            ['ref_51002' => "ርብዒት"],
        ))->create();
    }
}
