<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Package_Table', function (Blueprint $table) {
            $table->increments('packageID');
            $table->integer('courseID');
            $table->string('package_name');
            $table->string('price');
            $table->string('test_Time');
            $table->string('language');
            $table->string('total_question');//Json
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
        Schema::dropIfExists('Package_Table');
    }
}
