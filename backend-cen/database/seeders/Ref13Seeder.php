<?php

namespace Database\Seeders;
use App\Models\Ref_13;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref13Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ref_13::factory(5)->state(new sequence(
                ['ref_13002' => "ተመርዕየ ኣይፈልጥን"],
                ['ref_13002' => "ምርዕው/ቲ"],
                ['ref_13002' => "ተፈላልየ"],
                ['ref_13002' => "ፍቱሕ"],
                ['ref_13002' => "ዝመተቶ/ታ"]
            ))->create();
    }
}
