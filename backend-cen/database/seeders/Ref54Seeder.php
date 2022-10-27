<?php

namespace Database\Seeders;
use App\Models\Ref_54;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref54Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //መስፈሪ መዐቀኒ መጠን ዓሳ
        Ref_54::factory(7)->state(new sequence(
            ['ref_54002' => "መስፈሪ መዐቀኒ መጠን ዓሳ"],
        ))->create();
    }
}
