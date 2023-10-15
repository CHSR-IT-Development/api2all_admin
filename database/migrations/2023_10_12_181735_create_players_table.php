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
            $table->foreignId('user_id')->default(1);
            $table->string('user_name');
            $table->string('full_name')->default('Full Name');
            $table->string('password');
            $table->bigInteger('credit_limit')->default(0);
            $table->string('currency')->default('MYR');
            $table->date('dob')->default('1996-01-01');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile')->nullable();
            $table->string('time_zone')->nullable();
            $table->timestamp('timestamp')->useCurrent();
            $table->string('bank_name')->default('Maybank Berhad');
            $table->string('bank_account_no')->default('11201123352');
            $table->integer('gender')->default(1);
            $table->string('ref_code');
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
