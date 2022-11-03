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
        //ዋንነት ጥሪት
        Schema::create('ad26s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->integer('ad26002');  //ዓይነት_ጥሪት_id
            $table->integer('ad26003');  //ሓደ_ዓመትን_ትሕቲኡን_ተባ
            $table->integer('ad26004');  //ሓደ_ዓመትን_ትሕቲኡን_ኣን
            $table->integer('ad26005');  //ልዕሊ_ሓደ_ዓመት_ክሳብ_ሰለስተ_ዓመት_ተባ
            $table->integer('ad26006');  //ልዕሊ_ሓደ_ዓመት_ክሳብ_ሰለስተ_ዓመት_ኣን
            $table->integer('ad26007');  //ልዕሊ_ሰለስተ_ዓመት_ተባ
            $table->integer('ad26008');  //ልዕሊ_ሰለስተ_ዓመት_ኣን
            // $table->integer('ad26009');  //ካብ_መሸጣ_ጥሪት_ዝተረኽበ_ኣታዊ_ብናቅፋ
            // $table->integer('ad26010');  //ባጤራ_id
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
        Schema::dropIfExists('ad26s');
    }
};
