<?php

namespace Database\Seeders;
use App\Models\Ref_64;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref64Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // ህላወ
           Ref_64::factory(2)->state(new sequence(
            ['ref_64002' => "ኣሎ"],
            ['ref_64002' => "የለን"],
           ))->create();
    }
}
