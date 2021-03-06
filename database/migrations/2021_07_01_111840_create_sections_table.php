<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('major_programs_id')->unsigned();
            $table->foreign('major_programs_id')->references('id')->on('major_programs')->onDelete('cascade');

            $table->string('name');

            // already enrolled
            $table->integer('currentNumberOfStudent')->default(0);

            // number of studen can be enrolled
            $table->integer('maxNumberOfStudent');

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
        Schema::dropIfExists('sections');
    }
}
