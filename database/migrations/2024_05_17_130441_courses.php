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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('coursesId');
            $table->string('coursesName');
            $table->string('coursesSKS');
            $table->string('coursesLecture');
            $table->string('coursesDate');
            $table->timestamps();
        });

        Schema::create('mbkmCourses', function (Blueprint $table) {
            $table->bigIncrements('mbkmCoursesId');
            $table->string('mbkmCoursesName');
            $table->string('mbkmCoursesDuration');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('mbkmCourses');
    }
};
