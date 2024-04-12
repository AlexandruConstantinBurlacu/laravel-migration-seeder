<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('train_company');
            $table->string('departure');
            $table->string('arrival');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code');
            $table->tinyInteger('carriage_number');
            $table->boolean('is_it_on_time');
            $table->boolean('is_cancelled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
