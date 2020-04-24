<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('phase_id');
            $table->timestamp('date');
            $table->unsignedSmallInteger('personal_feeling');
            $table->unsignedSmallInteger('client_feeling');
            $table->integer('num_of_meetings');
            $table->integer('num_of_communications');
            $table->unsignedSmallInteger('understanding');
            $table->foreign('phase_id')->references('id')->on('phases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
