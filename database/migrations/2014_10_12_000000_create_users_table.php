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

            $table->date('birthDate')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone')->unique();
            $table->string('gander');

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
