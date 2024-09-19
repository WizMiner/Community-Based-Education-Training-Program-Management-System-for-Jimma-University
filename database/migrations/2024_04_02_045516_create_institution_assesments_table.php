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
        Schema::create('institution_assesments', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->longText('description');
            $table->integer('institution_id');
            $table->dateTime('assesment_date');
            $table->integer('stud_training_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institution_assesments');
    }
};
