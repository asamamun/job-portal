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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //job description
            $table->bigInteger('employer_id')->unsigned()->nullable();
            $table->foreign('employer_id')->references('id')->on('employers')->onDelete('cascade');
            $table->bigInteger('functional_id')->unsigned()->nullable();
            $table->foreign('functional_id')->references('id')->on('functionals')->onDelete('cascade');
            $table->bigInteger('industrial_id')->unsigned()->nullable();
            $table->foreign('industrial_id')->references('id')->on('industrials')->onDelete('cascade');
            $table->bigInteger('special_id')->unsigned()->nullable();
            $table->foreign('special_id')->references('id')->on('specials')->onDelete('cascade');
            //job type
            $table->set('type', ['full-time', 'part-time', 'contract', 'internship', 'freelance', 'other'])->default('other');
            $table->set('status', ['open', 'closed', 'cancelled', 'progress', 'pending', 'promoted'])->default('open');
            $table->bigInteger('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->bigInteger('state_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->integer('salary')->nullable();
            $table->integer('vacancy')->nullable();
            $table->date('deadline');
            $table->string('experience')->nullable();
            $table->string('qualification')->nullable();
            $table->string('contact');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->date('expires');
            $table->integer('points')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
