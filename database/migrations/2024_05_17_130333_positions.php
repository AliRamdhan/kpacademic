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
          // data mahasiswa dan data dospem
          Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('studentId');
            $table->string('studentName');
            $table->string('studentNim')->unique();
            $table->string('studentProdi');
            $table->string('studentSKS');
            $table->string('studentSemester');
            $table->timestamps();
        });

        Schema::create('lectures', function (Blueprint $table) {
            $table->bigIncrements('lectureId');
            $table->string('lectureName');
            $table->string('lectureDepartment');
            $table->timestamps();
        });

        Schema::create('alocationSupervisor', function (Blueprint $table) {
            $table->bigIncrements('alocId');
            $table->string('alocName');
            $table->unsignedBigInteger('alocStudent');
            $table->foreign('alocStudent')->references('studentId')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('alocSupervisor');
            $table->foreign('alocSupervisor')->references('lectureId')->on('lectures')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alocationSupervisor');
        Schema::dropIfExists('students');
        Schema::dropIfExists('lectures');
    }
};
