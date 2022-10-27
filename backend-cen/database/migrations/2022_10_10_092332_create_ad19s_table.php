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
        //ሰራሕተኛ
        Schema::create('ad19s', function (Blueprint $table) {
            $table->id();
            $table->string('personal_id');//personal_id
            $table->foreign('personal_id')->references('personal_id')->on('personal_ids')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ad19002');//ቦታ ስራሕ
            $table->string('ad19003');//ዓይነት ስራሕ
            $table->integer('ad19004');//ገምጋም ወርሓዊ እቶት
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
        Schema::dropIfExists('ad19s');
    }
};
