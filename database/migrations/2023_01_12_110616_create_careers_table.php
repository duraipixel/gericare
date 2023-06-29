<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("mobile")->nullable();
            $table->string("file")->nullable();
            $table->string("designation")->nullable();
            $table->string("relevant_experience")->nullable();
            $table->longText("message")->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->enum('career_status', ['onhold', 'inprogress', 'hired', 'rejected']);
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
        Schema::dropIfExists('careers');
    }
}
