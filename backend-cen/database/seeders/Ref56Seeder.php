<?php

namespace Database\Seeders;
use App\Models\Ref_56;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref56Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //መስፈሪ መዐቀኒ መጠን ኣግራብ
        Ref_56::factory(5)->state(new sequence(
            ['ref_56002' => "ቁጽሪ"],
            ['ref_56002' => "ኩንታል"],
        ))->create();
    }
}
