<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bulk_order_leads', function (Blueprint $table) {
            $table->string('lead_source')->default('Organic Lead')->after('status');
            $table->string('page_source')->nullable()->after('lead_source');
        });
    }

    public function down(): void
    {
        Schema::table('bulk_order_leads', function (Blueprint $table) {
            $table->dropColumn(['lead_source', 'page_source']);
        });
    }
};
