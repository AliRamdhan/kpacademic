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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            // $table->string('usertype')->default("user");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('roleuser')->default(2);;
            $table->unsignedBigInteger('studentId')->nullable();
            $table->unsignedBigInteger('lectureId')->nullable();

            $table->foreign('studentId')->references('studentId')->on('students')->onDelete('cascade');
            $table->foreign('lectureId')->references('lectureId')->on('lectures')->onDelete('cascade');
            $table->foreign('roleuser')->references('roleId')->on('roles')->onDelete('cascade');

            // Ensure that only one of mahasiswa_id or dosen_id is set
            // $table->check('(role = "mahasiswa" AND mahasiswa_id IS NOT NULL AND dosen_id IS NULL) OR (role = "dosen" AND dosen_id IS NOT NULL AND mahasiswa_id IS NULL)');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
