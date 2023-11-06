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
        Schema::create('enrols', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable();
            $table->integer("course_id")->nullable();
            $table->integer("date_added")->nullable();
            $table->integer("last_modified")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrols');
    }
};
