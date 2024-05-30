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
            $table->string('lectureConcentration');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('students');
        Schema::dropIfExists('lectures');
    }
};
