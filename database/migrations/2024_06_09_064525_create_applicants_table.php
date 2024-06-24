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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            //user_id forengn key
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->text('objective')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('nid')->nullable();
            //file, cv, jobtypes
            $table->string('file')->nullable();
            $table->string('cv')->nullable();
            //chackbox akare thakbe
            $table->string('jobtype')->nullable();
            //location, dob, type, points
            $table->string('location')->nullable();
            $table->date('dob')->nullable();
            $table->set('gender',['male', 'female', 'others'])->nullable();
            $table->string('religion')->default('islam');
            $table->string('nationality')->default('bangladeshi');
            $table->set('marital',['single', 'married', 'others'])->nullable();
            $table->set('type',['0','1'])->default('0');//regular and professional
            //available for
            $table->set('available_for',['part-time','full-time','both'])->default('both');
            $table->integer('points')->nullable();
            $table->set('status',['0','1'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
