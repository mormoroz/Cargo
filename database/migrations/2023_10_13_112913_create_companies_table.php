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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_user_id')
                ->references('id')->on('main_user')
                ->onDelete('cascade');
            $table->string('INN', 10);
            $table->string('name');
            $table->string('address');
            $table->foreignId('company_type_id')
                ->references('id')->on('company_type')
                ->onDelete('cascade');
            $table->foreignId('registration_county_id')
                ->references('id')->on('registration_county')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
