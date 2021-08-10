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

            $table->text('code');
            $table->text('name');
            $table->longText('description');
            $table->integer('student_number');
            $table->integer('ad_student_number');
            $table->decimal('rate');
            $table->decimal('ad_rate');
            $table->decimal('cost');
            $table->integer('discount');

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
