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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');         
           
            /*
            $table->integer('conference_id');
            $table->tinyInteger('lang');
            $table->tinyInteger('gender');
            $table->enum('type',['superAdmin','admin','superJury','jury','user']);
            $table->tinyInteger('isVerified');
            $table->json('permisions');
            $table->json('extraProfile');
            $table->tinyInteger('isDeteted');
            $table->tinyInteger('state');
            $table->string('login');
            */         
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
