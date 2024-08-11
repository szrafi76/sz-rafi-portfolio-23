<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heros', function (Blueprint $table) {
            $table->id();
            $table->string('author')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('banner')->nullable();
            $table->json('expertise_area')->nullable(); // JSON type for storing an array of strings
            $table->tinyInteger('order')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('heros');
    }
}
