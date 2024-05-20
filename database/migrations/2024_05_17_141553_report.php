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
            $table->string('reportTitle');
            $table->string('reportDate');
            $table->unsignedBigInteger('reportKp');
            $table->unsignedBigInteger('reportRecognition');

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
