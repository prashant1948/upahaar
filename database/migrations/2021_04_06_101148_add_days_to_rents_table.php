<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDaysToRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rents', function (Blueprint $table) {
            $table->date('from_date');
            $table->date('end_date')->nullable('');
            $table->string('with_driver')->default('yes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rents', function (Blueprint $table) {
            //
        });
    }
}
