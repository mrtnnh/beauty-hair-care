<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('addresses')){
        Schema::create('addresses', function (Blueprint $table) {
          $table->id();
          $table->integer('postcode');
          $table->string('prefecture');
          $table->string('address_city');
          $table->string('address_street');
          $table->string('building')->nullable();
          $table->string('tell');
          $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
