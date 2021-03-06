<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->integer('vacancy');
            $table->string('salary');
            $table->enum('job_type', ['full_time', 'part_time', 'internship','freelance']);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('job_categories');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('job_companies');
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
        Schema::dropIfExists('jobs');
    }
}
