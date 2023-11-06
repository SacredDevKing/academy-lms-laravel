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
        Schema::create('payment_gateways', function (Blueprint $table) {
            $table->id();
            $table->string("identifier")->nullable();
            $table->string("currency");
            $table->string("title");
            $table->text("description");
            $table->text("keys");
            $table->string("model_name")->nullable();
            $table->integer("enabled_test_mode");
            $table->integer("status");
            $table->integer("is_addon");
            // $table->string("created_at");
            // $table->string("updated_at");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_gateways');
    }
};
