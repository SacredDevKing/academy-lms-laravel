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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("code")->nullable();
            $table->string("name")->nullable();
            $table->integer("parent")->default(0);
            $table->string("slug")->nullable();
            $table->integer("date_added")->nullable();
            $table->integer("last_modified")->nullable();
            $table->string("font_awesome_class")->nullable();
            $table->string("thumbnail")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
