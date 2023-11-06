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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->longText("short_description")->nullable();
            $table->longText("description")->nullable();
            $table->longText("outcomes")->nullable();
            $table->text("faqs");
            $table->string("language")->nullable();
            $table->integer("category_id")->nullable();
            $table->integer("sub_category_id")->nullable();
            $table->longText("section")->nullable();
            $table->longText("requirements")->nullable();
            $table->double("price", 8, 2)->nullable();
            $table->integer("discount_flag")->default(0);
            $table->double("discounted_price", 8, 2)->nullable();
            $table->string("level")->nullable();
            $table->string("user_id")->nullable();
            $table->string("thumbnail")->nullable();
            $table->string("video_url")->nullable();
            $table->integer("date_added")->nullable();
            $table->integer("last_modified")->nullable();
            $table->string("course_type")->nullable();
            $table->integer("is_top_course")->default(0);
            $table->integer("is_admin")->nullable();
            $table->string("status")->nullable();
            $table->string("course_overview_provider")->nullable();
            $table->longText("meta_keywords")->nullable();
            $table->longText("meta_description")->nullable();
            $table->integer("is_free_course")->nullable();
            $table->integer("multi_instructor")->default(0);
            $table->integer("enable_drip_content");
            $table->integer("creator")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
