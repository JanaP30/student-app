<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('firstName');
            $table->string('secondName');
            $table->string('email');
            $table->integer('gender');
            $table->softDeletes();
        });
    }

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
   Schema::dropIfExists('teachers');
}
}