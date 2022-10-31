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
    { //መንበርን ቀረባትን 
        Schema::create('ad08s', function (Blueprint $table) {
            $table->id();
            
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');

            $table->integer('residence_id');//residence_id
            $table->integer('ad08002');//ዓይነት_ገዛ_id
            $table->string('ad08003');//ቁጽሪ_ክፍልታት
            $table->integer('ad08004');//ናይ_ውልቂ_id
            $table->integer('ad08005');//ክራይ_id
            $table->integer('ad08006');//ወርሓዊ_ክፍሊት
            $table->integer('ad08007');//ባጤራ_id
            $table->integer('ad08008');//ጽሬት_ዝስተ_ማይ
            $table->integer('ad08009');//ካበይ_ትረክብ
            $table->integer('ad08010');//ዓይነት_ዓይኒ_ምድሪ
           
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
        Schema::dropIfExists('ad08s');
    }
};
