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
        //ካልእ_ኣታዊታት
        Schema::create('ad35s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->integer('ad35002');//ዓይነት_ካልእ_ኣታዊ_id
            $table->integer('ad35003');//ኣብ_ውሽጢ_6_ወርሒ
            $table->integer('ad35004');//ኣብ_ውሽጢ_12_ወርሒ
            $table->integer('ad35005');//ባጤራ_id
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
        Schema::dropIfExists('ad35s');
    }
};
