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
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->set('types',['mobile banking', 'bank account', 'cash', 'other']);
			$table->string('account')->nullable();
			$table->string('account_number')->nullable();
			$table->integer('points');
			$table->string('transaction_id')->nullable();
			$table->set('status', ['request', 'approved', 'rejected', 'processing'])->default('request');
			$table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraws');
    }
};
