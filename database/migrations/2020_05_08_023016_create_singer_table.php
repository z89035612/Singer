<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Singer', 50);
            $table->integer('Age')->nullable();
            $table->string('sex', 2)->nullable();
            $table->string('Ifo', 500)->nullable();
            $table->string('image', 50)->nullable();
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
        Schema::dropIfExists('singer');
    }
}
