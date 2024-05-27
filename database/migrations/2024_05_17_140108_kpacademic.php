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
        Schema::create('locationKP', function (Blueprint $table) {
            $table->bigIncrements('locationId');
            $table->string('locationProof');
            $table->string('locationName');
            $table->text('locationReason');
            $table->string('locationStatus'); //pending,approve
            $table->unsignedBigInteger('locationUser');
            $table->foreign('locationUser')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locationKP');
    }
};
