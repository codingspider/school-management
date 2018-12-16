<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_no');
            $table->integer('day');
            $table->integer('time_slot');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('semster_id');
            $table->timestamps();

$table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
$table->foreign('semster_id')->references('id')->on('semsters')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routines');
    }
}
