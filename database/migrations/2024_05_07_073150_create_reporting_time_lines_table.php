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
        Schema::create('reporting_time_lines', function (Blueprint $table) {
            $table->id();
            $table->string('ReportingQuarter');
            $table->integer('ReportingYear');
            $table->string('RID');
            $table->string('ReportTitle');
            $table->date('ReportingStartDate');
            $table->date('ReportingStartEnd');
            $table->string('ReportType');
            $table->string('ReportDescription');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reporting_time_lines');
    }
};
