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
        //ተወሳኪ_ሓበሬታ
        Schema::create('ad03s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('residence_id');//area id
            $table->foreign('residence_id')->references('id')->on('ad02s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ad03002');  //ዚፕ_ኮድ
            $table->string('ad03003');  //ጎደና
            $table->string('ad03004');  //ቁጽሪ_ገዛ
            $table->string('ad03005');  //ቁጽሪ_መለለዪ_ስድራ
            $table->integer('ad03006');  //ብዝሒ_ስድራቤት
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
        Schema::dropIfExists('ad03s');
    }
};
