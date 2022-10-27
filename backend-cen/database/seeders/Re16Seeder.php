<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re16;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re16Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        // ኩነታት መርዓ
        Re16::factory(5)->state(new sequence(
            ['re16002' => "ተመርዕየ ኣይፈልጥን"],
            ['re16002' => "ምርዕው/ቲ"],
            ['re16002' => "ተፈላልየ"],
            ['re16002' => "ፍቱሕ"],
            ['re16002' => "ዝመተቶ/ታ"]
        ))->create();
    }
}
