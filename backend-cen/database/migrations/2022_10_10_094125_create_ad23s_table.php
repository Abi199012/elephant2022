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
        //ሰራሕተኛ ኣብ ውሽጢ ዝሓለፈ 6 ኣዋርሕ ብልግሲ ዝተቐበሎ እንተሎ

        Schema::create('ad23s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id')->unique();//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ad23002');//ብጎደሎ_ዋጋ_ዝገዛእካዮ
            $table->integer('ad23003');//መግቢ_ከም_ደሞዝካ
            $table->integer('ad23004');//ካብ_ናጻ_ገዛ_ክራይ_ትረኽቦ
            $table->integer('ad23005');//ክዳውንቲ_ከም_ሓገዝ_ዝረኸብካዮ
            $table->integer('ad23006');//ካልእ_ትረኽቦ_ሓገዝ
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
        Schema::dropIfExists('ad23s');
    }
};
