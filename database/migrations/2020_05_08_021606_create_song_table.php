<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Sname', 50);
            $table->string('Singer', 50);
            $table->integer('Hits')->nullable();
            $table->string('Class', 50);
            $table->string('Descr', 50);
            $table->string('plyurl', 50);
            $table->string('Time', 50)->nullable();
            $table->string('songlanguage', 50)->nullable();
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
        Schema::dropIfExists('song');
    }
}
