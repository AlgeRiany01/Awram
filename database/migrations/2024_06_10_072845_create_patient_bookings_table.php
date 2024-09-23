<?php

use App\enums\patientBookingStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patient_bookings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('patient');
            $table->unsignedBigInteger('hospital');
            $table->foreign('patient')
                ->references('id')->on('patients')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hospital')
                ->references('id')->on('hospitals')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->date('date');
            $table->enum('status', patientBookingStatus::values())->default(patientBookingStatus::WAITING->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_bookings');
    }
};
