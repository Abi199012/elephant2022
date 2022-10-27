<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re50;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re50Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //መስርሒ መግቢ ጸዓት

        Re50::factory(8)->state(new sequence(
            ['re50002' => "እይጥቀሙን"],
            ['re50002' => "ኢለክትሪክ"],
            ['re50002' => "ጋዝ"],
            ['re50002' => "ዕንጸይቲ"],
            ['re50002' => "ላምባ"],
            ['re50002' => "ኩቦን ቀሸምን"],
            ['re50002' => "ፈሓም ካብ ጥፋእ ሓዊ"],
            ['re50002' => "ላምባ"],
        ))->create();

    }
}
