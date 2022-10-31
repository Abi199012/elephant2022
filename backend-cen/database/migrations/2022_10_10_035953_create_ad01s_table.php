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
    {  // area table
        Schema::create('ad01s', function (Blueprint $table) {
            $table->id(); //id 
            $table->string('family_id',255);//family_id
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer("ad01002");//ዞባ
            $table->integer("ad01003");//ንኡስ_ዞባ
            $table->integer("ad01004");//ከተማ
            $table->integer("ad01005");//ከባቢ
            $table->integer("ad01006");//ዓዲ
            $table->integer("ad01007");//ቁጽሪ መለለዪ ቦታ //reference 
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
        Schema::dropIfExists('ad01s');
    }
};
