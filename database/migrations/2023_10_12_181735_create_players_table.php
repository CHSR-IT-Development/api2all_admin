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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('user_name');
            $table->string('password');
            $table->bigInteger('credit_limit')->default(0);
            $table->string('currency')->default('MYR');
            $table->string('name');
            $table->date('dob')->default('0001-01-01');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile')->nullable();
            $table->timestamp('time_zone')->useCurrent();
            $table->string('bank_name')->default('SSR');
            $table->string('bank_account_no')->default('Credit');
            $table->integer('gender')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
