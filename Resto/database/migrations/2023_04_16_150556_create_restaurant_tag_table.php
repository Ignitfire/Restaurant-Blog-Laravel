<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurant_tag', function (Blueprint $table) {
            $table->id();

            $table->integer('restaurants_id')->unsigned();
            $table->integer('tags_id')->unsigned();

            $table->foreign('restaurants_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_tag');
    }
};
