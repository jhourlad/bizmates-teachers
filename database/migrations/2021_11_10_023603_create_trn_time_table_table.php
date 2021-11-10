<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnTimeTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_time_table', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('trn_teacher');
            $table->dateTime('lesson_datetime')->useCurrent();
            $table->enum('status', range(1, 3))->comment('status 1=open, 2=backup, 3=reserved');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trn_time_table');
    }
}
