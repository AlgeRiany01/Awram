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
        Schema::create('patients_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient');
            $table->foreign('patient')
                ->references('id')->on('patients')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->longText('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_posts');
    }
};