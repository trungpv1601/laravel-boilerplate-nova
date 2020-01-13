<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid')->nullable();
            $table->string('asin')->unique();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('sales_rank')->nullable();
            $table->string('date_listed')->nullable();
            $table->string('ratings')->nullable();
            $table->text('keywords')->nullable();
            $table->string('price')->nullable();
            $table->string('raw_image')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('is_crawled')->default(false);
            $table->boolean('is_downloaded')->default(false);
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
        Schema::dropIfExists('products');
    }
}
