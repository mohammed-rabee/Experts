<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaches', function (Blueprint $table) {
            $table->id();

            $table->integer('yearProgramId')->references('id')->on('year_programs')->onDelete('cascade');
            $table->integer('teacherId')->references('id')->on('teachers')->onDelete('cascade');
            $table->integer('sectionId')->references('id')->on('sections')->onDelete('cascade');

            $table->double('currentPayment');
            $table->double('leftPayment');
            $table->double('overallPayment');

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
        Schema::dropIfExists('teaches');
    }
}
