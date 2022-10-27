<?php

namespace Database\Seeders;
use App\Models\Ref_28;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref28Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             // ኩነታት ጥዕና
             Ref_28::factory(4)->state(new sequence(
                ['ref_28002' => "ጥዑይ"],
                ['ref_28002' => "ሕዱር ሕማም"],
                ['ref_28002' => "ኣእምራዊ ሕማም"],
                ['ref_28002' => "ስንክልና"],
            ))->create();
    }
}

