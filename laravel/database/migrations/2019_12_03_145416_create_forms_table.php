<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('forms', function (Blueprint $table) {
                $table->increments('id');
                $table->string('Firstname');
                $table->string('Lastname');
                $table->string('Email');
                $table->string('username');
                $table->string('PSD');
                $table->string('CPSD');
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
        Schema::dropIfExists('forms');
    }
}
