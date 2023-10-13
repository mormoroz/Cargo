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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_status_type_id')
                ->references('id')->on('cargo_type')
                ->onDelete('cascade');
            $table->foreignId('employee_id')
                ->nullable()
                ->references('id')->on('employee')
                ->onDelete('cascade');
            $table->foreignId('company_id')
                ->references('id')->on('company')
                ->onDelete('cascade');
            $table->foreignId('customer_id')
                ->references('id')->on('customer')
                ->onDelete('cascade');
            $table->foreignId('cargo_id')
                ->references('id')->on('cargo')
                ->onDelete('cascade');
            $table->string('start_point');
            $table->string('end_point');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
