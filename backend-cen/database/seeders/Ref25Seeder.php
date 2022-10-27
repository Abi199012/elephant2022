<?php

namespace Database\Seeders;
use App\Models\Ref_25;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref25Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // መስርሒ መግቢ ጸዓት
          Ref_25::factory(6)->state(new sequence(
            ['ref_25002' => "ኢለክትሪክ"],
            ['ref_25002' => "ጋዝ"],
            ['ref_25002' => "ዕንጸይቲ"],
            ['ref_25002' => "ላምባ"],
            ['ref_25002' => "ኩቦን ቀሸምን"],
            ['ref_25002' => "ካልእ (ጽሓፍ)"],

        ))->create();
    }
}
