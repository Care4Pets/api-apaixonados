<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssitancialPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistancial_partners', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->char('fiscal_document', 14)->unique();
            $table->string('partner_name')->index();
            $table->string('city');
            $table->string('state');
            $table->char('country', 2)->default('BR');
            $table->char('zipcode', 8)->nullable()->index();
            $table->string('address1')->nullable()->index();
            $table->string('address2')->nullable();
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assitancial_partners');
    }
}
