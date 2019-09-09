<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('complet_name');

            $table->string('email')->unique();
            $table->string('phone');
            $table->text('adress');

            $table->string('card_type');
            $table->string('card_number');
            $table->string('card_name');
            $table->string('card_adress');
            $table->string('card_country');
            $table->string('cvv');
            $table->string('exp_month');
            $table->string('exp_year');


            $table->bigInteger('commande_id')->unsigned();
            $table->foreign('commande_id')->references('id')->on('commandes');



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
        Schema::dropIfExists('clients');
    }
}
