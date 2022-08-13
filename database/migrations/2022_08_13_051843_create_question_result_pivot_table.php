<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionResultPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_result', function (Blueprint $table) {
            $table->unsignedInteger('result_id');
            $table->foreign('result_id', 'id_from_result_ta')->references('id')->on('results')->onDelete('cascade');

            $table->unsignedInteger('question_id');

            $table->foreign('question_id', 'id_from_question_ta')->references('id')->on('questions')->onDelete('cascade');

            $table->unsignedInteger('option_id');

            $table->foreign('option_id', 'id_from_option_ta')->references('id')->on('options')->onDelete('cascade');

            $table->integer('points')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_result');
    }
}
