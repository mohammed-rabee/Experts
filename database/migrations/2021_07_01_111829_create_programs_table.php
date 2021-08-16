<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();

            $table->text('name')->unique();
            $table->text('code')->unique();
            
            $table->longText('description');

            // student number in all section
            $table->integer('student_number');

            // fake student number in all section
            $table->integer('student_number_fake');

            // total number of student ever enrolled in this program
            $table->integer('student_previous_number');

            // actual rate
            $table->decimal('rate');

            // fake rate
            $table->decimal('rate_fake');

            $table->decimal('cost');
            $table->decimal('discount');

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
        Schema::dropIfExists('programs');
    }
}
