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
        Schema::create('book_highlights', function (Blueprint $table) {
            $table->id('high_id');
            $table->foreignId('id')->references('id')->on('book_series')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('likes');
            $table->string('comments');
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
        Schema::dropIfExists('book_highlights');
    }
};
