<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_kana');
            $table->string('first_name');
            $table->longbinary('img');
            $table->longbinary('thumbnail');
            $table->string('middle_name');
            $table->string('middle_kana');
            $table->string('last_name');
            $table->string('last_kana');
            $table->string('major');
            $table->integer('sex');
            $table->string('born_place');
            $table->text('hobby');
            $table->text('about_me');
            $table->text('technic');
            $table->text('specialty');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
            $table->dateTime('birth');
            
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
