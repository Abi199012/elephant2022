<?php

namespace Database\Seeders;
use App\Models\Ref_42;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref42Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ምንጪ ኣታዊ
             Ref_42::factory(4)->state(new sequence(
                ['ref_42002' => "ካብ ትሰርሖ"],
                ['ref_42002' => "ሓገዝ መቕርብ ካብ ወጻኢ ሃገር"],
                ['ref_42002' => "ሓገዝ መቕርብ ካብ ውሽጢ ሃገር"],
                ['ref_42002' => "መንግስታዊ ደገፍ"],
            ))->create();

    }
}





