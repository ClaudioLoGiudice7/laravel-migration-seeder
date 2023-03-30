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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company");
            $table->string("departure_station");
            $table->string("arrival_station");
            $table->dateTime("departure_time");
            $table->dateTime("arrival_time");
            $table->string("train_code");
            $table->string("carriages");
            $table->string("on_time")->default(true);
            $table->string("cancelled")->default(false);
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
        Schema::dropIfExists('trains');
    }
};