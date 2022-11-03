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
        Schema::create('ad27s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->integer('ad27002');  //ዝተሸጠ_መጠን_ጥሪት
            $table->integer('ad27003');  //ኣብ_ካልእ_መዓላ_ዝወዓለ_መጠን
            $table->integer('ad27004');  //ካብ_መሸጣ_ጥሪት_ዝተረኽበ_ኣታዊ_ብናቅፋ
            $table->integer('ad27005');  //ባጤራ_idp
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
        Schema::dropIfExists('ad27s');
    }
};
