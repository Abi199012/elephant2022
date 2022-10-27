<?php

namespace Database\Seeders;
use App\Models\EnumLocation;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnumLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EnumLocation::factory(1)->state(new sequence(
            [
                'zoba_id' => "1",
                'sub_zoba_id' => '2',
                'town_id' => "3",
                'kebabi_id' => '3',
                'Village_id' => '1',
                'enum_area_id' => '1',
                'enum_id'=>'1'
            ],
      
        ))->create();
    }
}
