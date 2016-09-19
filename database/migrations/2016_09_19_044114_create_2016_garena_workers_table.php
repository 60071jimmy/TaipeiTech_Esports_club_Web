<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create2016GarenaWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('2016garenaWorkers', function (Blueprint $table) {
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('joins');
            $table->string('willing');
            $table->string('category')->nullable();
            $table->rememberToken();
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
        Schema::drop('2016garenaWorkers');
    }
}
