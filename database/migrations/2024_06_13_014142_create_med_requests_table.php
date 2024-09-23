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
        Schema::create('med_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient');
            $table->foreign('patient')
                ->references('id')->on('patients')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qint');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('med_requests');
    }
};
