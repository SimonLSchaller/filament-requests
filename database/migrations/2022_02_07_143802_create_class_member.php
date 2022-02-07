<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('class_member');
        Schema::create('class_member', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userid');
            $table->bigInteger('classid');
            $table->timestamps();
            
            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('classid')->references('id')->on('class');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_member');
    }
}
