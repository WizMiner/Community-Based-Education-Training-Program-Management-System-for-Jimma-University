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
        Schema::create('student_training_student_training_response', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_training_id');
            $table->unsignedBigInteger('student_training_response_id');
            // Add other columns if needed
            $table->timestamps();

            // $table->foreign('student_training_id')->references('id')->on('student_trainings')->onDelete('cascade');
            // $table->foreign('student_training_response_id')->references('id')->on('student_training_responses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_training_student_training_response');
    }
};
