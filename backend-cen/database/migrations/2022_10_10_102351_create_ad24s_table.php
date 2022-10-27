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
        //ቀዋምን_ዘይቀዋምን ንብረት
        Schema::create('ad24s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->string('ad24002');//ቀዋምን_ዘይቀዋምን_id
            $table->string('ad24003');//ዓይነት_ንብረት
            $table->string('ad24004');//ስም_ዓይነት_ንብረት
            $table->integer('ad24005');//ብዝሒ
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
        Schema::dropIfExists('ad24s');
    }
};
