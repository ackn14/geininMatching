<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeininsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geinins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user');
            $table->string('image')->nullable();
            $table->string('genre');
            $table->string('role');
            $table->string('creater');
            $table->string('target');
            $table->text('self_introduce')->nullable();
            $table->string('email');
            // $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('geinins');
    }
}
