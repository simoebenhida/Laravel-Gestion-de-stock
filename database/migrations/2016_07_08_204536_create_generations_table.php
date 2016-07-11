<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mode');
            $table->integer('type_id');
            $table->string('date');
            $table->string('nfacture');
            $table->integer('quantite');
            $table->integer('prix_uni');
            $table->string('fourni');
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
        Schema::drop('generations');
    }
}
