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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->text('speciality')->nullable();
            $table->text('degrees')->nullable();
            $table->text('training')->nullable();
            $table->text('contact_info')->nullable();
            $table->text('work_days')->nullable();
            $table->json('services')->nullable();
            $table->boolean('status')->default(1)->comment('0 = Inactive, 1 = Active');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
