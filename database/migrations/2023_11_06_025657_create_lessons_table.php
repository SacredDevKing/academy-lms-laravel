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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("duration")->nullable();
            $table->integer("course_id")->nullable();
            $table->integer("section_id")->nullable();
            $table->string("video_type")->nullable();
            $table->integer("cloud_video_id")->nullable();
            $table->string("video_url")->nullable();
            $table->integer("date_added")->nullable();
            $table->integer("last_modified")->nullable();
            $table->string("lesson_type")->nullable();
            $table->longText("attachment")->nullable();
            $table->string("attachment_type")->nullable();
            $table->string("caption")->nullable();
            $table->longText("summary")->nullable();
            $table->integer("is_free")->default(0);
            $table->integer("order")->default(0);
            $table->string("video_type_for_mobile_application")->nullable();
            $table->string("video_url_for_mobile_application")->nullable();
            $table->string("duration_for_mobile_application")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
