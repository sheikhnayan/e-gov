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
