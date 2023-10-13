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
        Schema::create('sub_supply_chains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supply_chain_id')
                ->references('id')->on('supply_chain')
                ->onDelete('cascade');
            $table->string('start_point');
            $table->string('end_point');
            $table->foreignId('delivery_type_id')
                ->references('id')->on('delivery_type')
                ->onDelete('cascade');
            $table->foreignId('contractor_id')
                ->references('id')->on('contractor')
                ->onDelete('cascade');
            $table->integer('sequence_number');
            $table->dateTime('expected_time_end');
            $table->dateTime('real_time_end');
            $table->foreignId('sub_supply_chain_status_id')
                ->references('id')->on('sub_supply_chain_status')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_supply_chains');
    }
};
