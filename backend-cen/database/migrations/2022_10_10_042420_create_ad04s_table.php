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
    {  //personal
        Schema::create('ad04s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id',255);//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ad04002');//ዝምድና_ምስ_ሓላፊ_ስድራ_id
            $table->string('ad04003');//ጾታ_id
            $table->integer('ad04004');//ዜግነት_id
            $table->string('ad04005');//ቁጽሪ_ነባርነት
            $table->integer('ad04006');//ቁጽሪ_መንነት
            $table->string('ad04007');//ዕለተ_ልደት
            $table->string('ad04008');//ቦታ_ትውልዲ
            $table->string('ad04009');//ትውልዲ_ሃገር
            $table->string('ad04010');//መበቆል_ዓዲ
            $table->string('ad04011');//መበቆል_ሃገር
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
        Schema::dropIfExists('ad04s');
    }
};
