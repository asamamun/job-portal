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
            $table->set('job_type', ['Full-time', 'Part-time', 'Contract', 'Internship', 'Freelance']);
            $table->set('job_status', ['Open', 'Closed', 'Cancelled']);
            $table->bigInteger('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->bigInteger('state_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('address');
            $table->integer('salary');
            $table->date('deadline');
            $table->string('experience');
            $table->string('qualification');
            $table->string('contact');
            $table->string('email');
            $table->string('website');
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->date('expires');
            $table->string('status');
            $table->integer('points');
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
