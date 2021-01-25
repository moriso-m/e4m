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
            $table->bigIncrements('product_id');
            $table->string('product_code')->nullable();
            $table->string('product_name',50)->nullable();
            $table->string('image',200)->nullable();
            $table->integer('initial_price')->nullable();
            $table->integer('selling_price')->nullable();
            $table->bigInteger('product_category')->unsigned();
            $table->timestamps();

            $table->foreign('product_category')->references('category_code')->on('product_categories')->onDelete('cascade');
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
