<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnTeacherRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_teacher_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('trn_teacher');
            $table->enum('role', range(1, 3))->comment('role 1=trainer, 2=assessor, 3=staff');
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
        Schema::dropIfExists('trn_teacher_role');
    }
}
