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
        Schema::create('watched_durations', function (Blueprint $table) {
            $table->id();
            $table->integer("watched_student_id")->nullable();
            $table->integer("watched_course_id")->nullable();
            $table->integer("watched_lesson_id")->nullable();
            $table->integer("current_duration")->nullable();
            $table->longText("watched_counter")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watched_durations');
    }
};
