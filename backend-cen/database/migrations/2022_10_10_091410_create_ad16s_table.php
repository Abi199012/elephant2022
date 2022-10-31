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
        //ዝለዓለ_ደረጃ_ትምህርቲ
        Schema::create('ad16s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id')->unique();//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ad16002');//ዝለዓለ_ደረጃ_ትምህርቲ_id
            $table->string('ad16003');//ዝለዓለ_ደረጃ_ትምህርቲ_ ዝተመርቅካሉ ዕለት
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
        Schema::dropIfExists('ad16s');
    }
};
