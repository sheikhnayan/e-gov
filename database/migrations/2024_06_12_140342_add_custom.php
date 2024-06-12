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
            $table->string('number_of_work_permit')->nullable();
            $table->string('work_permit_validity')->nullable();
            $table->string('position')->nullable();
            $table->string('organization')->nullable();
            $table->string('work_region')->nullable();
            $table->string('issue_date_and_time')->nullable();
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
