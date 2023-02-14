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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('MovieID');
            $table->foreign('MovieID')->references('id')->on('movies')->onDelete('cascade');
            $table->unsignedBigInteger('ShowtimeID');
            $table->foreign('ShowtimeID')->references('id')->on('showtimes')->onDelete('cascade');
            $table->string('ScreenNo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shows');
    }
};
