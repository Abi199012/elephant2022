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
        //ሰራሕተኛ ኣብ ውሽጢ ዝሓለፈ 6 ኣዋርሕ ብጥረ ገንዘብ ዝተቐበሎ
        Schema::create('ad22s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id')->unique();//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ad22002');//ደሞዝ  //ብዘይ ግብርን ተቖራጽን
            $table->integer('ad22003');//ኮምሽን_ኣበል_ተወሳኺ_ደሞዝ
            $table->integer('ad22004');//ደረጃ ትርፊ_ግዜ
            $table->integer('ad22005');//ሞቑሽሽ_ብገንዘብ
            $table->integer('ad22006');//ካልእ_ኣታዊ_ብገንዘብ
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
        Schema::dropIfExists('ad22s');
    }
};
