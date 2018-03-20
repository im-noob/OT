<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Question_Table', function (Blueprint $table) {
            $table->increments('questionID');
            $table->integer('question_type_ID');
            $table->integer('topicID');
            $table->integer('languageID');
            $table->integer('courseID');
            $table->string('question',3000);
            $table->string('ans',100);
            $table->string('solution',10000)->nullable();
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
        Schema::dropIfExists('Question_Table');
    }
}
