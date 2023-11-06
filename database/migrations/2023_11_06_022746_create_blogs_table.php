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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer("blog_category_id");
            $table->integer("user_id");
            $table->string("title");
            $table->text("keywords");
            $table->longText("description");
            $table->string("thumbnail");
            $table->string("banner");
            $table->integer("is_popular");
            $table->longText("likes");
            $table->string("added_date");
            $table->string("updated_date");
            $table->string("status");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
