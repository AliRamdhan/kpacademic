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
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('reportId');
            $table->text('reportTitle');
            $table->string('reportDuration');
            $table->string('reportProof');
            $table->string('reportDate');
            $table->unsignedBigInteger('reportKp')->nullable();
            $table->unsignedBigInteger('reportRecognition')->nullable();
            $table->unsignedBigInteger('reportUser');

            $table->foreign('reportUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('reportKp')->references('locationId')->on('locationKP')->onDelete('cascade');
            $table->foreign('reportRecognition')->references('recognitionId')->on('recognitions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
