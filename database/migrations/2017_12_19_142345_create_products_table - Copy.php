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
            $table->string('product_name', 127);
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->string('slug', 127)->unique();
            $table->string('product_image', 127);
            $table->string('price', 127);
            $table->string('key_features', 255);
            $table->string('delivery_time', 255);
            $table->string('measurement_unit', 127);
            $table->string('samples', 127);
            $table->string('packing_details', 127);
            $table->string('packing_details_img1', 127);
            $table->string('packing_details_img2', 127);
            $table->string('plant_image', 127);
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
        Schema::dropIfExists('products');
    }
}
