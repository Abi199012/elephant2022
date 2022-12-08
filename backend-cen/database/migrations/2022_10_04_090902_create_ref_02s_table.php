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
        Schema::create('ref_02s', function (Blueprint $table) {
            $table->id();
            $table->string('ref_02002');//sub_zone name
            $table->string('ref_02003');//sub_zone_code
            $table->unsignedBigInteger('ref_02004');//zoba reference id
            $table->foreign('ref_02004')->references('id')->on('ref_01s')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('ref_02005')->default(1);        
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
        Schema::dropIfExists('ref_02s');
    }
};
