<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('=settings', function (Blueprint $table) {
            $table->increments('id');
            $table->char('site_title');
            $table->char('logo');
            $table->char('slogan');


            $table->timestamps();
        });
    }



  // `logo` varchar(256) NOT NULL,
  // `slogan` varchar(256) NOT NULL,
  // `site_offline` int(1) NOT NULL,
  // `offline_text` varchar(256) NOT NULL,
  // `meta_description` varchar(256) NOT NULL,
  // `meta_keyword` varchar(256) NOT NULL,
  // `address` varchar(256) NOT NULL,
  // `phone_fax` text NOT NULL,
  // `email` text NOT NULL,
  // `copy_right` varchar(256) NOT NULL,
  // `facebook` text NOT NULL,
  // `twitter` text NOT NULL,
  // `google_plus` text NOT NULL,
  // `google_play` text NOT NULL,
  // `apple_itunes` text NOT NULL

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('=settings');
    }
}
