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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('currency');
            $table->string('bank_account');
            $table->string('bank_branch');
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('extra1')->nullable();
            $table->string('extra2')->nullable();
            $table->date('dob')->nullable();
            $table->string('remark')->nullable();
            $table->integer('status')->default(0);
            $table->date('creation_date_utc')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
