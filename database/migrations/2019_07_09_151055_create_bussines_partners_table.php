<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBussinesPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bussines_partners', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('bussines_name')->index();
            $table->char('fiscal_document', 14)->unique();
            $table->string('fiscal_name')->nullable()->index();
            $table->string('address_line1')->nullable()->index();
            $table->string('address_line2')->nullable()->index();
            $table->char('zipcode')->nullable()->index();
            $table->point('geopoint');
            $table->string('number')->nullable()->index();
            $table->string('site')->nullable();
            $table->text('description');
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
        Schema::dropIfExists('bussines_partners');
    }
}
