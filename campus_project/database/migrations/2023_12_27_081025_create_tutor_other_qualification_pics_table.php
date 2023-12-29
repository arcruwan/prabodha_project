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
        Schema::create('tutor_other_qualification_pics', function (Blueprint $table) {
            $table->id();
            $table->string('tutor_other_qualifications_Pic')->nullable();
            $table->unsignedBigInteger('tutor_qualifications_id');
            $table->foreign('tutor_qualifications_id')->references('id')->on('tutors_other_qualifications')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutor_other_qualification_pics');
    }
};
