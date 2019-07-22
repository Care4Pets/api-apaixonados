<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_owners', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('pet_id')->unsigned();
            $table->bigInteger('owner_id')->unsigned();
            $table->bigInteger('relationship');
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('owner_id')->references('id')->on('owners');
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
        Schema::dropIfExists('pet_owners');
    }
}
