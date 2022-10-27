<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re46;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re46Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //መስፈሪ መዐቀኒ መጠን ኣግራብ
        Re46::factory(4)->state(new sequence(
            ['re46002' => "መፈትኒ 1"],
            ['re46002' => "መፈትኒ 1"],
            ['re46002' => "መፈትኒ 1"],
            ['re46002' => "መፈትኒ 1"],
        ))->create();

        

    }
}
