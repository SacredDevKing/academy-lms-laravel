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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable();
            $table->string("payment_type")->nullable();
            $table->integer("course_id")->nullable();
            $table->double("amount", 8, 2)->nullable();
            $table->integer("date_added")->nullable();
            $table->integer("last_modified")->nullable();
            $table->string("admin_revenue")->nullable();
            $table->string("instructor_revenue")->nullable();
            $table->double("tax", 8, 2)->nullable();
            $table->integer("instructor_payment_status")->default(0);
            $table->string("transaction_id")->nullable();
            $table->string("session_id")->nullable();
            $table->string("coupon")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
