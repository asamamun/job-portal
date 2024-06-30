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
        Schema::create('applicant_posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->bigInteger('applicant_id')->unsigned()->nullable();
            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
            $table->set('status', ['applied','short list','under review','interview' ,'accepted', 'rejected','hired'])->default('applied');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_user');
    }
};
