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
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('full_name');
            $table->text('email');
            $table->text('phone');
            $table->text('date_of_birth');
            $table->text('blood_type');
            $table->enum('gender',['Male','Female']);
            $table->enum('donated_previously',['Yes','No']);
            $table->text('last_donation_date')->nullable();
            $table->text('recent_activities')->nullable();
            $table->text('recent_activities_details')->nullable();

            
            $table->text('chronic_diseases')->nullable();
            $table->json('chronic_diseases_details')->nullable();

            $table->text('medications')->nullable();
            $table->text('medications_details')->nullable();

            $table->text('heart_disease_details')->nullable();
            $table->text('diabetes_details')->nullable();
            $table->text('kidney_failure_details')->nullable();
            $table->text('liver_disease_details')->nullable();
            $table->text('blood_disorders_details')->nullable();
            $table->text('autoimmune_diseases_details')->nullable();
            $table->text('infectious_diseases_details')->nullable();
            $table->text('cancer_details')->nullable();
            $table->text('other_chronic_diseases')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donates');
    }
};
