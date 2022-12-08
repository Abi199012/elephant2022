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
        Schema::create('ref_05s', function (Blueprint $table) {
            $table->id();
            $table->string('ref_05002');//village name
            $table->string('ref_05003');//village_code
            $table->unsignedBigInteger('ref_05004'); //town reference id
            $table->foreign('ref_05004')->references('id')->on('ref_04s')->onDelete('cascade')->onUpdate('cascade');
              $table->boolean('ref_05005')->default(1);        
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
        Schema::dropIfExists('ref_05s');
    }
};
