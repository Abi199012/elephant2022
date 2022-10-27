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
        //ዘይሕርሻዊ
        Schema::create('ad34s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->integer('ad34002');//ዓይነት_ኣታዊ_id
            $table->integer('ad34003');//ኣብ_ውሽጢ_6_ወርሒ
            $table->integer('ad34004');//ኣብ_ውሽጢ_12_ወርሒ
            $table->integer('ad34005');//ዓይነት_ዘይሕርሻዊ_ንጥፈት_id
            $table->integer('ad34006');//ካብ_ዝተዋህበ_ኣገልግሎት_ዝተረኽበ_ጠቕላላ_ኣታዊ_ብናቕፋ
            $table->integer('ad34007');//ግብሪ_ከይተኸፍሎ
            $table->integer('ad34008');//ግብሪ_ዝተኸፍሎ_ጽሩይ_ኣታዊ
            $table->integer('ad34009');//ባጤራ_id
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
        Schema::dropIfExists('ad34s');
    }
};
