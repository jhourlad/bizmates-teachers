<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_evaluation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('trn_teacher');
            $table->enum('result', range(1, 2))->comment('result 1=taught, 2=noshow');
            $table->dateTime('lesson_datetime')->useCurrent();
            $table->dateTime('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trn_evaluation');
    }
}
