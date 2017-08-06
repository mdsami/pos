<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('full_name');
            $table->string('contact_no');
            $table->string('address');
            $table->string('orginal_picture');            
            $table->string('thumb_picture');
            $table->string('remark');
            $table->string('user_type');
            $table->string('status');
            $table->string('date');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
