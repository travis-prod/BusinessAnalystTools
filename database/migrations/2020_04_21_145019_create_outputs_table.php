<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outputs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('entry_id');
            $table->bigInteger('type_id');
            $table->integer('count');
            $table->unsignedSmallInteger('effectiveness');
            $table->foreign('entry_id')->references('id')->on('entries')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('output_type_enums');
            $table->unique(['entry_id', 'type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outputs');
    }
}
