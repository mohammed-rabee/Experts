<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();

            $table->string('username')->unique();
            $table->string('password');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->date('birthDate');
            $table->integer('age');
            $table->string('phone')->unique();
            $table->string('gander');

            $table->unsignedBigInteger('major_id')->unsigned()->nullable();
            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');

            $table->boolean('active');

            $table->string('shareFolderLink')->nullable();

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
