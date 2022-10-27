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
        //ኣባላት ዕድመ ልዕሊ 10 ዝኾኑ ይሕተት
        Schema::create('ad20s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id')->unique();//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ad20002');//ኣብ ውሽጢ ዝሓለፈ 6 ኣዋርሕ ኣብ ትኽፈሎ ወይ ዘይትኽፈሎ ስራሕ ተሳቲፍካ'ዶ ትፈልጥ?// እወ ወይ ኣይፋል
            $table->integer('ad20003');//ኣብ ውሽጢ ዝሓለፈ 6 ኣዋርሕ ካብ ስራሕካ ብግዝያውነት ኣብኲርካ'ዶ ትፈልጥ?// እወ ወይ ኣይፋል
            $table->integer('ad20004');//ኣብ ውሽጢ ዝሓለፈ 12 ኣዋርሕ ትኽፈሎ ወይ ዘይትኽፈሎ ስራሕ ተሳቲፍካ'ዶ ትፈልጥ?// እወ ወይ ኣይፋል
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
        Schema::dropIfExists('ad20s');
    }
};
