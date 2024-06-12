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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->nullable();
            $table->string('legal_entity')->nullable();
            $table->string('state_registration_number')->nullable();
            $table->string('tax_payer_code')->nullable();
            $table->string('founders_of_legal_entity')->nullable();
            $table->string('activity_type')->nullable();
            $table->string('legal_address')->nullable();
            $table->string('actual_activity_address')->nullable();
            $table->string('address')->nullable();
            $table->string('lang')->nullable();
            $table->string('long')->nullable();
            $table->string('staffing_list')->nullable();
            $table->string('legal_registration_certificate')->nullable();
            $table->string('license_to_carry_out_licensed_activities')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('person_without_citizenship')->nullable();
            $table->string('education')->nullable();
            $table->string('family-status')->nullable();
            $table->string('whatsApp')->nullable();
            $table->string('viber')->nullable();
            $table->string('passport')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('doc_number')->nullable();
            $table->string('doc_type')->nullable();
            $table->string('date_issue')->nullable();
            $table->string('date_expire')->nullable();
            $table->string('mobile')->nullable();
            $table->string('photo')->nullable();
            $table->string('passport_1')->nullable();
            $table->string('pasport_2')->nullable();
            $table->string('user_name')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
