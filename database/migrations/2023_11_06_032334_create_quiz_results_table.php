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
        Schema::create('quiz_results', function (Blueprint $table) {
            $table->id();
            $table->integer("quiz_id");
            $table->integer("user_id");
            $table->longText("user_answers");
            $table->longText("correct_answers")->comment("question_id");
            $table->double("total_obtained_marks", 8, 2);
            $table->string("date_added");
            $table->string("date_updated");
            $table->integer("is_submitted");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_results');
    }
};
