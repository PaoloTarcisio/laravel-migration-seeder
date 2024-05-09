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

            // company
            $table->string('Company', 64);

            // start_station
            $table->string('Departure_Station', 32);

            // arrive_station
            $table->string('Arrival_Station', 64);

            // start_at
            $table->time('Departure_Time');

            // arrive_at
            $table->time('Arrival_Time');

            // train_code
            $table->string('Train_Code', 16)->unique();

            // train_carriages
            $table->string('Train_Carriages', 16)->nullable();

            // right_time
            $table->boolean('On_Time')->default(true);

            // deleted
            $table->boolean('Deleted')->default(false);


            $table->timestamps();
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
