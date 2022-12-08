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
        Schema::create('ad51s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id')->unique();//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ad51002');//ኣብ ውሽጢ ዝሓለፈ 6 ኣዋርሕ ኣብ ትኽፈሎ ወይ ዘይትኽፈሎ ስራሕ ተሳቲፍካ'ዶ ትፈልጥ?// እወ ወይ ኣይፋል
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
        Schema::dropIfExists('ad51s');
    }
};
