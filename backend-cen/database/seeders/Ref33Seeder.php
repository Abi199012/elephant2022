<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Ref_33;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref33Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ዓይነት ደም
        Ref_33::factory(8)->state(new sequence(
            ['ref_33002' => "A+"],
            ['ref_33002' => "A-"],
            ['ref_33002' => "B+"],
            ['ref_33002' => "AB"],
            ['ref_33002' => "AB"],
            ['ref_33002' => "O+"],
            ['ref_33002' => "O-"],
            ['ref_33002' => "ኣይፈልጥክዎን"],
        ))->create();
    }
}
