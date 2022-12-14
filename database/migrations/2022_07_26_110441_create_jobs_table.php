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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->integer('salary');
            $table->text('description');
            $table->string('category');
            $table->string('image')->nullable();
            $table->string('employer-name');
            $table->string('employer-phone');
            $table->string('employer-location');
            $table->string('employer-description');
            $table->string('employer-email');
            $table->string('employer-website');
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
        Schema::dropIfExists('jobs');
    }
};
