<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('specie_id')->unsigned();
            $table->bigInteger('breed_id')->unsigned()->nullable();
            $table->string('name')->index();
            $table->date('birthdate')->nullable()->index();
            $table->json('meta_data')->nullable();
            $table->text('short_bio')->nullable();
            $table->foreign('specie_id')->references('id')->on('species');
            $table->foreign('breed_id')->references('id')->on('breeds');
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
        Schema::dropIfExists('pets');
    }
}
