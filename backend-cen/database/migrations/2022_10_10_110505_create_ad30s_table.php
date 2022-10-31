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
        //ዓይነት_ዘራእቲ
        Schema::create('ad30s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->integer('ad30002');//ዓይነት_ዘራእቲ_id
            $table->integer('ad30003');//መስፈሪ_መዐቀኒ_መጠን_id
            $table->integer('ad30004');//መጠን_ዝተረኽበ_ምህርቲ
            $table->integer('ad30005');//ዝተሸጠ_መጠን_ምህርቲ
            $table->integer('ad30006');//ኣብ_ሃልኪ_ስድራ_ቤት_ዝወዓለ_መጠን
            $table->integer('ad30007');//ኣብ_ካልእ_መዓላ_ዝወዓለ_መጠን
            $table->integer('ad30008');//ካብ_ዝተሸጠ_ምህርቲ_ዝተረኽበ_ኣታዊ_ብናቕፋ
            $table->integer('ad30009');//ባጤራ_id
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
        Schema::dropIfExists('ad30s');
    }
};
