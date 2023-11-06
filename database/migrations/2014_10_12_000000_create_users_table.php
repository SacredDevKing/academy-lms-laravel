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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string("last_name")->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->longText("skills");
            $table->longText("social_links")->nullable();
            $table->longText("biography")->nullable();
            $table->integer("role_id")->nullable();
            $table->integer("date_added")->nullable();
            $table->integer("last_modified")->nullable();
            $table->longText("wishlist")->nullable();
            $table->longText("title")->nullable();
            $table->longText("payment_keys");
            $table->longText("verification_code")->nullable();
            $table->integer("status")->nullable();
            $table->integer("is_instructor")->default(0);
            $table->string("image")->nullable();
            $table->longText("sessions");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
