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
       //mortality 
        Schema::create('ad36s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->string('ad36002');//ስም_መዋቲ
            $table->string('ad36003');//ስም_ኣቦ
            $table->string('ad36004');//ስም_ኣቦሓጎ
            $table->integer('ad36005');//ዝምድና_ምስ_ሓላፊ_ስድራ_id ref
            $table->integer('ad36006');//ጾታ_id ref
            $table->integer('ad36007');//ዝሞተሉ_ዕድመ
            $table->string('ad36008');//ስራሕ
            $table->integer('ad36009');//ምኽንያት_ሞት ref
            $table->integer('ad36010');//ኣብ_ሕርሲ_ወይ_2_ወርሒ_ድሕሪ_ሕርሲ_ድያ_ሞይታ
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
        Schema::dropIfExists('ad36s');
    }
};
