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
        Schema::create('ref_04s', function (Blueprint $table) {
            $table->id();
            $table->string('ref_04002'); //kebabi_zone name
            $table->string('ref_04003'); //kebabi_code
            $table->unsignedBigInteger('ref_04004'); //town reference id
            $table->foreign('ref_04004')->references('id')->on('ref_03s')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('ref_04005')->default(1);
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
        Schema::dropIfExists('ref_04s');
    }
};
