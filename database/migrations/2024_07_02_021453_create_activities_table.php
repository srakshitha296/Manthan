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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDeleteCascade();
            $table->foreignId('activiy_type_id')->constrained('activiy_types')->onDeleteCascade();
            $table->string('title');
            $table->string('description');
            $table->string('date');
            $table->string('hours');
            $table->string('file')->nullable();
            $table->string('certificate')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
