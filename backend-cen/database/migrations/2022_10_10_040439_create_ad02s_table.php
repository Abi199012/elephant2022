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
    {  //ኩነታት መንበሪ and መንበሪ ኣሃዱ ሓበሬታ
        Schema::create('ad02s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',255);//family_id
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('area_id');//area id
            $table->foreign('area_id')->references('id')->on('ad01s')->onDelete('cascade')->onUpdate('cascade');
            $table->integer("ad02002");//ኩነታት መንበሪ //ref
            $table->string("ad02003");//ቁጽሪ_ቅርጺ_ህንጻ
            $table->string("ad02004");//ቁጽሪ_ኣሃዱ_መንበሪ
            $table->string("ad02005");//ቁጽሪ_ስድራቤት
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
        Schema::dropIfExists('ad02s');
    }
};
