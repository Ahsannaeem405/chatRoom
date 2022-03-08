<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('report')->nullable();
            $table->text('comment')->nullable();
            $table->unsignedBigInteger('msg_id')->nullable();
            $table->unsignedBigInteger('msg_user_id')->nullable();
            $table->unsignedBigInteger('user_rep_id')->nullable();
            $table->timestamps();

            $table->foreign('msg_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_rep_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('msg_id')->references('id')->on('messages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
