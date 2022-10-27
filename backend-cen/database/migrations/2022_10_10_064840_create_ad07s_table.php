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
    { //personal address info
        Schema::create('ad07s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id')->unique();//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ad07002');//ህላወ_id
            $table->integer('ad07003');//ቦታ_ህላወ_id
            $table->integer('ad07004'); //ዞባ_id
            $table->integer('ad07005'); //ንኡስ_ዞባ_id
            $table->integer('ad07006'); //ሃገራዊ_ኣገልግሎት_id
            $table->string('ad07007'); //ቁጽሪ_ሞባይል
            $table->string('ad07008'); //ቀዋሚ_ተሌፎን
            $table->string('ad07009'); //CDMA
                  
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
        Schema::dropIfExists('ad07s');
    }
};
