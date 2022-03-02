<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_settings', function (Blueprint $table) {
            $table->id();
            $table->text('googleClient')->nullable();
            $table->text('googleSecret')->nullable();
            $table->text('facebookClient')->nullable();
            $table->text('facebookSecret')->nullable();
            $table->text('twitterClient')->nullable();
            $table->text('twitterSecret')->nullable();
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
        Schema::dropIfExists('social_settings');
    }
}
