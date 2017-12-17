<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->string('business_name', 127);
            $table->string('business_slug', 127)->unique();
            $table->string('business_type');
            $table->string('business_address', 800)->nullable();
            $table->string('phone_1', 20)->nullable();
            $table->string('phone_2', 20)->nullable();
            $table->string('mobile_number', 20)->nullable();
            $table->string('fax_number', 20)->nullable();
            $table->string('business_email', 127)->nullable();
            $table->string('business_website', 20)->nullable();
            $table->string('logo', 127)->nullable();
            $table->text('business_description')->nullable();
            $table->string('year_of_establishment', 8)->nullable();
            $table->string('registration_number', 127)->nullable();
            $table->decimal('sales_volume', 20, 2)->nullable();
            $table->string('number_of_staff', 10)->nullable();
            $table->string('ceo_name', 127)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_details');
    }
}
