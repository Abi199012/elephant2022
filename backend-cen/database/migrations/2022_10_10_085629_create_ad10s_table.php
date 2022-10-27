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
    { // ፍርያምነት
        Schema::create('ad10s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id')->unique();//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ad10002');//ካብ_ብሂወት_ዝወለድክዮም_ቆልዑ_ኣን
            $table->integer('ad10003');//ካብ_ብሂወት_ዝወለድክዮም_ቆልዑ_ተባ
            $table->integer('ad10004');//ካብ_ዝወለድክዮም_ምሳኺ_ዝነብሩ_ዘለው_ተባ
            $table->integer('ad10005');//ካብ_ዝወለድክዮም_ምሳኺ_ዝነብሩ_ዘለው_ኣን
            $table->integer('ad10006');//ካብ_ብሂወት_ዝተወልዱ_ደሓር_ዝሞቱ_ኣን
            $table->integer('ad10007');//ካብ_ብሂወት_ዝተወልዱ_ደሓር_ዝሞቱ_ተባ
            $table->integer('ad10008');//ካብ_ዝወለድክዮም_ኣብ_ካልእ_ዝነብሩ_ዘለው_ኣን
            $table->integer('ad10009');//ካብ_ዝወለድክዮም_ኣብ_ካልእ_ዝነብሩ_ዘለው_ተባ
            $table->integer('ad10010');//ኣብ_ውሽጢ_12_ኣዋርሕ_ብ_ሂወት_ዝተውልዱ
            $table->integer('ad10011');//ጾታ_ናይ_መወዳእታ_ዝተወልደ_ህጻን_ኣን
            $table->integer('ad10012');//ጾታ_ናይ_መወዳእታ_ዝተወልደ_ህጻን_ተባ
            $table->integer('ad10013');//መወዳእታ_ዝተወልደ_ህጻናት_ብሂወት_ዘየለዉ_ኣን  //መወዳእታ_ዝተወልደ_ህጻን_ብሂወት_ኣሎዶ
            $table->integer('ad10014');//መወዳእታ_ዝተወልደ_ህጻናት_ብሂወት_ዘየለዉ_ተባ  //መወዳእታ_ዝተወልደ_ህጻን_ብሂወት_ኣሎዶ
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
        Schema::dropIfExists('ad10s');
    }
};
