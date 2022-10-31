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
       //ኩነታት_ዓይነት_ስራሕ
        Schema::create('ad21s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id')->unique();//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ad21002');//ሓላፍነታዊ ስራሕ ወይ ዕዮ ኣብ ቀንዲ ስራሕካ እንታዩ፧
            $table->string('ad21003');//ቀንዲ ስራሕካ እንታይ ዓይነት እዩ፧
            $table->string('ad21004');//ደረጃ ስራሕካ፧
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
        Schema::dropIfExists('ad21s');
    }
};
