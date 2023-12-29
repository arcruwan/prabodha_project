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
        Schema::create('tutors_details', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('address');
            $table->string('contactNumber');
            $table->string('contactNumberFixed')->nullable();
            $table->string('gender');
            $table->string('nic');
            $table->string('email');
            $table->text('description')->nullable();
            $table->string('yearofOLExam');
            $table->string('OLIndexNumber');
            $table->text('OLResult');
            $table->string('yearofALExam');
            $table->string('ALIndexNumber');
            $table->text('ALResult');
            $table->text('quolificationDescription')->nullable();
            $table->string('language');
            $table->string('type');
            $table->string('currentOccupation')->nullable();
            $table->string('experience')->nullable();
            $table->unsignedBigInteger('login_id');
            $table->foreign('login_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('checkStatus')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors_details');
    }
};
