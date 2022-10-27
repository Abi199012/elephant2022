<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enum_locations', function (Blueprint $table) {
            $table->id();
            //there will be a ref her
            $table->string('zoba_id');
            $table->string('sub_zoba_id');
            $table->string('town_id');
            $table->string('kebabi_id');
            $table->string('Village_id');
            $table->string('enum_area_id');            
            $table->unsignedBigInteger('enum_id');
            $table->foreign('enum_id')->references('id')->on('enumerators')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enum_locations');
    }
};
