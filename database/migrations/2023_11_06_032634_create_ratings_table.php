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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->double("rating", 8, 2)->nullable();
            $table->integer("user_id")->nullable();
            $table->integer("ratable_id")->nullable();
            $table->string("ratable_type")->nullable();
            $table->integer("date_added")->nullable();
            $table->integer("last_modified")->nullable();
            $table->longText("review")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
