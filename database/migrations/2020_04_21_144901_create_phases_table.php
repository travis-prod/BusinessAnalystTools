<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 50);
            $table->string('description', 50)->nullable();
            $table->bigInteger('project_id');
            $table->timestamp('start_date');
            $table->timestamp('estimated_completion_date')->nullable();
            $table->timestamp('actual_completion_date')->nullable();
            $table->unsignedSmallInteger('overall_rating')->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phases');
    }
}
