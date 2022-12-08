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
        Schema::create('ref_06s', function (Blueprint $table) {
            $table->id();
            $table->string('ref_06002');//enaum_area name
            $table->string('ref_06003');//enam_area_code
            $table->unsignedBigInteger('ref_06004'); //village reference id
            $table->foreign('ref_06004')->references('id')->on('ref_05s')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('ref_06005')->default(1);        
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
        Schema::dropIfExists('ref_06s');
    }
};
