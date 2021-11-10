<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_teacher', function (Blueprint $table) {
            $table->unsignedBigInteger('id', false)->primary();
            $table->string('nickname', 25);
            $table->enum('status', range(0, 2))->comment('status 0=discontinued, 1=active, 2=deactivated');
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
        Schema::dropIfExists('trn_teacher');
    }
}
