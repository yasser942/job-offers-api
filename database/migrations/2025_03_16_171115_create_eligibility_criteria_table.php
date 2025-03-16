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
        Schema::create('eligibility_criteria', function (Blueprint $table) {
            $table->id('criterion_id');
            $table->string('criterion_name', 100);
            $table->string('criterion_code', 50)->unique();
            $table->text('ineligibility_description')->nullable();
            $table->boolean('default_eligible')->default(true);
            $table->timestamps();
            
            $table->index('criterion_name');
            $table->index('criterion_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eligibility_criteria');
    }
};
