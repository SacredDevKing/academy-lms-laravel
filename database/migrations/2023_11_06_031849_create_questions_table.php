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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer("quiz_id")->nullable();
            $table->longText("title")->nullable();
            $table->string("type")->nullable();
            $table->integer("number_of_options")->nullable();
            $table->longText("options")->nullable();
            $table->longText("correct_answers")->nullable();
            $table->integer("order")->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
