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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('type', ['checking', 'savings', 'other']);
            $table->string('account_number')->unique()->default('NB' . mt_rand(100000, 999999));
            $table->string('routing_number')->default('NCR' . mt_rand(100000, 999999));
            $table->string('bank_code')->default('NCF-' . mt_rand(100000, 999999));
            $table->string('iban');
            $table->decimal('balance', 10, 2)->default(0);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
