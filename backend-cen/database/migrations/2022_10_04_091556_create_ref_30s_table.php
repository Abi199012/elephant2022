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
        Schema::create('ref_30s', function (Blueprint $table) {
            $table->id();
            $table->string('ref_30002');
            $table->unsignedBigInteger('ref_30003');//ምድብ ሕማማት reference id
            $table->foreign('ref_30003')->references('id')->on('ref_29s')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('ref_30004')->default(1);          
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
        Schema::dropIfExists('ref_30s');
    }
};
