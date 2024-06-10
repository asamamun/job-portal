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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applicant_id')->unsigned()->nullable();
            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
            $table->set('level', ['primary', 'secondary', 'higher secondary', 'diploma', 'bachelor','master', 'phd', 'other'])->nullable();
            $table->string('institute');
            $table->string('board')->nullable();
            $table->string('duration')->nullable();
            $table->string('session')->nullable();
            $table->string('subject')->nullable();
            $table->string('group')->nullable();//seience, arts, commerce
            $table->string('division')->nullable();
            $table->string('grade')->nullable();
            $table->string('grade_out_of')->nullable();
            $table->string('passing_year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
