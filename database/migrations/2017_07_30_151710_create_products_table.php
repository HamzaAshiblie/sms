<?php

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
            $table->string('product_name');
            $table->text('product_description');
            $table->text('product_image');
            //$table->integer('brand_id');
            //$table->integer('category_id');
            $table->string('quantity');
            $table->string('rate');
            $table->string('whole_rate');
            $table->integer('product_active');
            $table->integer('product_status');
            $table->text('product_barcode');
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
        Schema::drop('products');
    }
}
