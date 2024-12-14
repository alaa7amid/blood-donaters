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
        Schema::create('requstings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('patient_name');
            $table->text('age');
            $table->text('email');
            $table->integer('phone');
            $table->enum('gender',['Male','Female']);
            $table->enum('blood_type',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->enum('recent_blood_test',['Yes','No']);
            $table->text('blood_test_details')->nullable();
            $table->text('chronic_diseases')->nullable();
            $table->json('chronic_diseases_details')->nullable(); 
            $table->text('reason_for_request');
            $table->enum('severe_bleeding',['Yes','No']);
            $table->text('severe_bleeding_details')->nullable();
            $table->enum('allergies',['Yes','No']);
            $table->text('allergy_details')->nullable();
            $table->enum('recent_medication',['Yes','No']);
            $table->text('medication_details')->nullable();
            $table->enum('previous_surgery',['Yes','No']);
            $table->text('surgery_details')->nullable();
            $table->unsignedBigInteger('hospital_id');
            // $table->string('hospital');
            // $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
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
        Schema::dropIfExists('requstings');
    }
};
