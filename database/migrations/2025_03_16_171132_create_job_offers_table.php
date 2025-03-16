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
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id('job_offer_id');
            $table->unsignedBigInteger('career_id');//there is no career table in the database ??
            $table->string('employer_name', 255)->nullable();
            $table->boolean('from_canadian_employer')->nullable();
            $table->boolean('offer_full_time')->nullable();
            $table->boolean('offer_non_seasonal')->nullable();
            $table->boolean('offer_outside_quebec')->nullable();
            $table->boolean('offer_meets_teer_requirement')->nullable();
            $table->string('salary_range', 100)->nullable();
            $table->integer('contract_duration')->nullable();
            $table->unsignedBigInteger('eligibility_criterion_id')->nullable();
            $table->timestamps();

            $table->foreign('eligibility_criterion_id')
                    ->references('criterion_id')
                    ->on('eligibility_criteria')
                    ->nullOnDelete()->cascadeOnUpdate();
            $table->index('eligibility_criterion_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
