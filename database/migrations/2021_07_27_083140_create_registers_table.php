<?php

use App\Models\YearProgram;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();

            $table->integer('yearProgramId')->references('id')->on('year_programs')->onDelete('cascade');
            $table->integer('studentId')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('registers');
    }
}
