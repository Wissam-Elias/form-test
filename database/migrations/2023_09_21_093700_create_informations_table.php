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
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->enum('sex', ['MALE', 'FEMALE']);
            $table->dateTime('birth_date');
            $table->enum('marital_status', ['MARRIED', 'BACHELOR', 'ABSOLUTE']);
            $table->string('emirate');
            $table->integer('annual_income');
            $table->boolean('has_car');
            $table->boolean('has_job');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};
