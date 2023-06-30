<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDoctorToBookAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_appointments', function (Blueprint $table) {
            $table->string('doctor_name')->nullable()->after('appointment_services');
            $table->unsignedBigInteger('doctor_id')->nullable()->after('doctor_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_appointments', function (Blueprint $table) {
            $table->dropColumn('doctor_name');
            $table->dropColumn('doctor_id');
        });
    }
}
