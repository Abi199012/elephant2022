<?php

namespace Database\Seeders;
use App\Models\Ref_38;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref38Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ቀዋምን ዝንቀሳቀስ 
        Ref_38::factory(2)->state(new sequence(
            ['ref_38002' => "ቀዋሚ"],
            ['ref_38002' => "ዝንቀሳቀስ"],
            ))->create();
    }
}
