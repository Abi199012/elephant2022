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
        //imgration
        Schema::create('ad37s', function (Blueprint $table) {
            $table->id();
            $table->string('family_id',60);
            $table->foreign('family_id')->references('family_id')->on('family_ids')->onDelete('cascade')->onDelete('cascade');
            $table->string('ad37002');//ስም
            $table->string('ad37003');//ስም_ኣቦ
            $table->string('ad37004');//ስም_ኣቦሓጎ
            $table->string('ad37005');//ዝምድና_ምስ_ሓላፊ_ስድራ_id ref
            $table->string('ad37006');//ጾታ_id ref
            $table->string('ad37007');//ዝፈለሰሉ_ዕድመ
            $table->string('ad37008');//ዓመተ_ምህረት_ዝኸደሉ
            $table->string('ad37009');//ዝነብረሉ_ሃገር_id ref
            $table->string('ad37010');//ዝነብረሉ_ከተማ_id
            $table->string('ad37011');//ኣን
            $table->string('ad37012');//ተባ
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
        Schema::dropIfExists('ad37s');
    }
};
