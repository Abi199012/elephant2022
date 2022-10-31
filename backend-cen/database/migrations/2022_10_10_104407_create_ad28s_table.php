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
        //ዓይነት_ውጽኢት_እንስሳ
        Schema::create('ad28s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->integer('ad28002');//ዓይነት_ውጽኢት_እንስሳ_id
            $table->integer('ad28003');//መስፈሪ_መዐቀኒ_መጠን_id
            $table->integer('ad28004');//መጠን_ዝተረኽበ_ምህርቲ
            $table->integer('ad28005');//ዝተሸጠ_መጠን_ምህርቲ
            $table->integer('ad28006');//ኣብ_ሃልኪ_ስድራ_ቤት_ዝወዓለ_መጠን
            $table->integer('ad28007');//ኣብ_ካልእ_መዓላ_ዝወዓለ_መጠን
            $table->integer('ad28008');//ካብ_ዝተሸጠ_ምህርቲ_ዝተረኽበ_ኣታዊ_ብናቕፋ
            $table->integer('ad28009');//ባጤራ_id
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
        Schema::dropIfExists('ad28s');
    }
};
