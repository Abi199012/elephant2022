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
        //ዓይነት_ገረብ
        Schema::create('ad32s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->integer('ad32002');//ዓይነት_ገረብ_id
            $table->integer('ad32003');//መስፈሪ_መዐቀኒ_መጠን_id
            $table->integer('ad32004');//መጠን_ዝተረኽበ_ምህርቲ
            $table->integer('ad32005');//ዝተሸጠ_መጠን_ምህርቲ
            $table->integer('ad32006');//ኣብ_ሃልኪ_ስድራ_ቤት_ዝወዓለ_መጠን
            $table->integer('ad32007');//ኣብ_ካልእ_መዓላ_ዝወዓለ_መጠን
            $table->integer('ad32008');//ካብ_ዝተሸጠ_ምህርቲ_ዝተረኽበ_ኣታዊ_ብናቕፋ
            $table->integer('ad32009');//ባጤራ_id
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
        Schema::dropIfExists('ad32s');
    }
};
