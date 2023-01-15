<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StaffData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('staff_data', function (Blueprint $table) {
              $table->increments('auto_id');
              $table->string('staff_id');
              $table->string('firstname');
              $table->string('lastname');
              $table->string('dob');
              $table->string('email');
              $table->string('phone_number');
              $table->string('position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
