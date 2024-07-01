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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('author')->nullable();
            $table->text('description')->nullable();
            $table->integer('paginate')->nullable(10);
            $table->string('icon')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('mobile')->nullable();
            $table->string('mobile')->nullable();
            $table->set('status', [1,0])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
