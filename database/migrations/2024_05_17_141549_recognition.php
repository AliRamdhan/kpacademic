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
        Schema::create('recognitions', function (Blueprint $table) {
            $table->bigIncrements('recognitionId');
            $table->string('recognitionName');
            $table->string('recognitionStatus');
            $table->text('recognitionReason');
            $table->string('recognitionProof');
            $table->date('recognitionDate');;

            $table->unsignedBigInteger('recognitionUser');
            $table->unsignedBigInteger('recognitionCourse');
            $table->unsignedBigInteger('recognitionActivity');

            $table->foreign('recognitionUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('recognitionCourse')->references('coursesId')->on('courses')->onDelete('cascade');
            $table->foreign('recognitionActivity')->references('mbkmCoursesId')->on('mbkmCourses')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('provenRecognition', function (Blueprint $table) {
            $table->bigIncrements('proveId');
            $table->string('proveName');
            $table->string('proveDuration');
            $table->unsignedBigInteger('proveRecognition');
            $table->foreign('proveRecognition')->references('recognitionId')->on('recognitions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provenRecognition');
        Schema::dropIfExists('recognitions');
    }
};
