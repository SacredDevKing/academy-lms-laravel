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
        Schema::create('watch_histories', function (Blueprint $table) {
            $table->id();
            $table->integer("course_id");
            $table->integer("student_id");
            $table->longText("completed_lesson");
            $table->integer("course_progress");
            $table->integer("watching_lesson_id");
            $table->longText("quiz_result");
            $table->string("date_added");
            $table->string("date_updated");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watch_histories');
    }
};
