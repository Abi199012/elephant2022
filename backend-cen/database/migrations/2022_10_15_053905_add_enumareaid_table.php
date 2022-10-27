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
        Schema::table('enumerators', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('enum_area_id');
            $table->foreign('enum_area_id')->references('id')->on('ref_06s')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enumerators', function (Blueprint $table) {
            //
            $table->dropColumn('enum_area_id');
            $table->foreign('enum_area_id')->references('id')->on('ref_06s')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
