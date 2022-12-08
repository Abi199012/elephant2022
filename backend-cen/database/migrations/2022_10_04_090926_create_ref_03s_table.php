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
        Schema::create('ref_03s', function (Blueprint $table) {
            $table->id();
            $table->string('ref_03002');//town name
            $table->string('ref_03003');//town_code
            $table->unsignedBigInteger('ref_03004');//sub_zoba reference id
            $table->foreign('ref_03004')->references('id')->on('ref_02s')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('ref_03005')->default(1);         
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
        Schema::dropIfExists('ref_03s');
    }
};
