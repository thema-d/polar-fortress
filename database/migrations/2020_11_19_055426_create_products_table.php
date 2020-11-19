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
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('size', ['SMALL', 'MEDIUM', 'LARGE']);
            $table->string('color');
            $table->integer('price');
            $table->text('images');
            $table->enum('gender', ['MALE', 'FEMALE']);
            $table->integer('available_amount')->default(0);
            $table->integer('rating')->nullable();
            $table->float('discount')->nullable()->default(0);
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
