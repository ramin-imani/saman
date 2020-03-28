<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_user', function (Blueprint $table) {
            $table->integer('conference_id')->unsigned()->index();
            $table->foreign('conference_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('conferences')->onDelete('cascade');
            $table->string('type');
            $table->tinyInteger('lang');
            /*s$table->enum('type',['superAdmin','admin','superJury','jury','user']);
            */
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
        Schema::dropIfExists('conference_user');
    }
}
