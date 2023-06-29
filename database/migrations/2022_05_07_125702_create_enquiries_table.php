<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type")->nullable()->comment('contact', 'consult');
            $table->string('enquiry_from')->nullable();
            $table->string("email")->nullable();
            $table->string("moble_no")->nullable();
            $table->string("subject")->nullable();
            $table->string("message")->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('services')->nullable();
            $table->enum("status", ['active', 'inactive'])->default('active');
            $table->enum("enquiry_status", ['new', 'closed', 'verified', 'inprogress', 'converted', 'cancelled'])->default('new');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
}
