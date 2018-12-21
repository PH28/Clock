<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('category');
            $table->string('name')->unique();
            $table->integer('price');
            $table->string('made');
            $table->string('image');
            $table->string('description');
            $table->longText('content');
            $table->integer('status');
            $table->integer('sale');
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
