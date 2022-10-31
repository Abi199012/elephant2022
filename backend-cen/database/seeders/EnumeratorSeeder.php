<?php

namespace Database\Seeders;
use App\Models\Enumerator;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnumeratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Enumerator::factory(1)->state(new sequence(
            ['f_name' => "Abel",'m_name' => 'Tiezazu','l_name' => "Berhe",'user_name' => 'abel@census.er','enum_area' => '1'],
      
        ))->create();
    }
}
