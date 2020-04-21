<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('entry_id');
            $table->bigInteger('type_id');
            $table->unsignedSmallInteger('effectiveness');
            $table->foreign('entry_id')->references('id')->on('entries')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('input_type_enums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputs');
    }
}
