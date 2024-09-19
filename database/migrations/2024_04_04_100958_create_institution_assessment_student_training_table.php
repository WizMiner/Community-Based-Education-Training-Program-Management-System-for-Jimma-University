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
        Schema::create('institution_assessment_student_training', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('institution_assessment_id');
            $table->unsignedBigInteger('student_training_id');
            // Add other columns if needed
            $table->timestamps();

            // $table->foreign('institution_assessment_id')->references('id')->on('institution_assessments')->onDelete('cascade');
            // $table->foreign('student_training_id')->references('id')->on('student_trainings')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institution_assessment_student_training');
    }
};
