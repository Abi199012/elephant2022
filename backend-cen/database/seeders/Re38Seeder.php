<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re38;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re38Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ምኽንያት ስንክልና
        Re38::factory(9)->state(new Sequence(
            ['re38002' => "ከምኡ ኢሉ/ኢላ ተወሊዳ"],
            ['re38002' => "ሓደጋ"],
            ['re38002' => "ውግእ"],
            ['re38002' => "ነተጉቲ/ቦንባ"],
            ['re38002' => "ምልማስ ፓልዮ ውሲኽካ"],
            ['re38002' => "ቁምጥና"],
            ['re38002' => "ዓሶ"],
            ['re38002' => "ካልእ ሕማማት"],
            ['re38002' => "ዓሶ"],
        ))->create();
    }
}
