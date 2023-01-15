<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_account', function (Blueprint $table) {

        $table->increments('auto_id');
        $table->string('staff_id');
        $table->string('username');
        $table->string('password');
        $table->string('account_type');

      });

      // Insert some stuff
      DB::table('user_account')->insert(
         array(
             'staff_id' => "00001",
             'username' => "admin",
             'password' => "admin123",
             'account_type' => "admin"
         )
      );

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
