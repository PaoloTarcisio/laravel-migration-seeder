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
            $table->string('Company', 32);
            // start_station
            $table->string('Start_Station', 32);

            // arrive_station
            $table->string('Arrive_Station', 64);

            // start_at
            $table->time('Start_At', 64);

            // arrive_at
            $table->time('Arrive_At', 32);

            // train_code
            $table->string('Train_Code', 16);

            // train_carriages
            $table->integer('Train_Carriages', 16);

            // right_time
            $table->integer('Right_Time', 8);

            // deleted
            $table->string('Deleted', 16);

            
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
