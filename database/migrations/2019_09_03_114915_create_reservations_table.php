<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->date('checkinDate');
            $table->date('checkoutDate');
            $table->integer('numberPeople');
            $table->integer('numberPets');
            $table->boolean('breakfast');
            $table->boolean('discount');
            $table->integer('discountValue');
            $table->double('finalPrice');
            $table->boolean('validated');
            $table->string('language');
            $table->boolean('dataProtection');
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
        Schema::dropIfExists('reservations');
    }
}
