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
        //ሞያ
        Schema::create('ad17s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id');//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ad17002');//ዓይነት_ሞያ_id
            $table->integer('ad17003');//ብከመይ_ኣጥሪኻዮ_id
            $table->integer('ad17004');//ዓመታት_ስራሕ 
            $table->integer('ad17005');//ሞያ_መዓርግ_id
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
        Schema::dropIfExists('ad17s');
    }
};
