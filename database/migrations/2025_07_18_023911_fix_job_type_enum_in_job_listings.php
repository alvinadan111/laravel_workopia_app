<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            // Drop the constraint manually (PostgreSQL requires raw SQL)
            DB::statement("ALTER TABLE job_listings DROP CONSTRAINT job_listings_job_type_check");

            // Re-add with corrected values
            DB::statement("
                ALTER TABLE job_listings 
                ADD CONSTRAINT job_listings_job_type_check 
                CHECK (job_type IN ('Full-Time', 'Part-Time', 'Contract', 'Temporary', 'Internship', 'Volunteer', 'On-Call'))
            ");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            DB::statement("ALTER TABLE job_listings DROP CONSTRAINT job_listings_job_type_check");

            DB::statement("
                ALTER TABLE job_listings 
                ADD CONSTRAINT job_listings_job_type_check 
                CHECK (job_type IN ('Full-Time', 'Part-Time', 'Contract', 'Temporary', 'Internshiip', 'Volunteer', 'On-Call'))
            ");
        });
    }
};
