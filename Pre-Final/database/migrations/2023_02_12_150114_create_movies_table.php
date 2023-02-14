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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('MovieName')->unique();
            $table->string('Language');
            $table->string('Genre');
            $table->enum('Status', array('Screening', 'Not Screening','Stop Screening'));
            $table->date('ReleaseDate');
            $table->string('Duration');
            $table->string('ImgURL')->nullable();
            $table->string('Trailer')->nullable();
            $table->longText('Description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
