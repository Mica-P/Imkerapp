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
        Schema::create('pages', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->string('title', 255);
            $table->string('subtitle', 255);
            $table->string('template', 255);
            $table->text('text');
            $table->text('text2');
            $table->text('banner_text');
            $table->string('banner_image_url', 255);
            $table->string('image_url1', 255);
            $table->string('image_url2', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
