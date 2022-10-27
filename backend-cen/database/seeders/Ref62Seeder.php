<?php

namespace Database\Seeders;
use App\Models\Ref_62;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref62Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ምኽንያት ሞት
        Ref_62::factory(5)->state(new sequence(
            ['ref_62002' => "ሓደጋ"],
            ['ref_62002' => "ሃንደበታዊ ሕማም"],
            ['ref_62002' => "መስዋእቲ"],
            ['ref_62002' => "ነብሰ-ቅትለት"],
            ['ref_62002' => "ኣብ ወሊድ"],
        ))->create();
    }
}
