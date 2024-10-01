<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subTitle');
            $table->string('client');
            $table->longText('description');
            $table->string('banner');
            $table->string('category_id');
            $table->json('gallery')->nullable();
            $table->date('completion_date');
            $table->string('figma_link')->nullable();
            $table->string('live_link')->nullable();
            $table->tinyInteger('order');
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
        Schema::dropIfExists('portfolios');
    }
}
