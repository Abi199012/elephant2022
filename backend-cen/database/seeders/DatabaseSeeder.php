<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   $this->call([
    //    Re01Seeder::class,
    //    Re02Seeder::class,
    //    Re09Seeder::class,

   
    CountryStateCityTableSeeder::class,

       Ref01Seeder::class,
       Ref02Seeder::class,
       Ref03Seeder::class,
       Ref04Seeder::class,
       Ref05Seeder::class,
       Ref06Seeder::class,
       Ref07Seeder::class,
       Ref08Seeder::class,
       Ref09Seeder::class,
       Ref10Seeder::class,

       Ref11Seeder::class,
       Ref12Seeder::class,
       Ref13Seeder::class,
       Ref14Seeder::class,
       Ref15Seeder::class,
       Ref16Seeder::class,
       Ref17Seeder::class,
       Ref18Seeder::class,
       Ref19Seeder::class,
       Ref10Seeder::class,

       Ref21Seeder::class,
       Ref22Seeder::class,
       Ref23Seeder::class,
       Ref24Seeder::class,
       Ref25Seeder::class,
       Ref26Seeder::class,
       Ref27Seeder::class,
       Ref28Seeder::class,
       Ref29Seeder::class,
       Ref20Seeder::class,

       Ref31Seeder::class,
       Ref32Seeder::class,
       Ref33Seeder::class,
       Ref34Seeder::class,
       Ref35Seeder::class,
       Ref36Seeder::class,
       Ref37Seeder::class,
       Ref38Seeder::class,
       Ref39Seeder::class,
       Ref30Seeder::class,

       Ref41Seeder::class,
       Ref42Seeder::class,
       Ref43Seeder::class,
       Ref44Seeder::class,
       Ref45Seeder::class,
       Ref46Seeder::class,
       Ref47Seeder::class,
       Ref48Seeder::class,
       Ref49Seeder::class,
       Ref50Seeder::class,

       Ref51Seeder::class,
       Ref52Seeder::class,
       Ref53Seeder::class,
       Ref54Seeder::class,
       Ref55Seeder::class,
       Ref56Seeder::class,
       Ref57Seeder::class,
       Ref58Seeder::class,
       Ref59Seeder::class,
       Ref60Seeder::class,

       Ref61Seeder::class,
       Ref62Seeder::class,
       Ref63Seeder::class,
       Ref64Seeder::class,
       Ref65Seeder::class,
       Ref66Seeder::class,
       Ref67Seeder::class,
    //    Ref68Seeder::class,
    //    Ref69Seeder::class,
    //    Ref60Seeder::class,

    EnumeratorSeeder::class,
    UserSeeder::class,
    EnumLocationSeeder::class,
      
 
   ]);
    }
}
