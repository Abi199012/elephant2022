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
        Schema::create('family_ids', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('family_id',255)->index();
            $table->string('f_name_head');
            $table->string('m_name_head');
            $table->string('l_name_head');
            $table->timestamps();

            $table->primary(['family_id']);
        });
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_ids');
    }
};
