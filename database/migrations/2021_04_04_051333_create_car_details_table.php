<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_details', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('image');
            $table->longText('description');
            $table->integer('seats');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('car_categories');
//            $table->unsignedBigInteger('company_id');
//            $table->foreign('company_id')->references('id')->on('job_companies');
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
        Schema::dropIfExists('car_details');
    }
}
