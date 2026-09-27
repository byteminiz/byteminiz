<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bulk_order_leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->date('event_date');
            $table->string('event_type');
            $table->text('location');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('formatted_address')->nullable();
            $table->longText('order_items')->nullable();
            $table->integer('total_items_count')->default(0);
            $table->decimal('estimated_total', 10, 2)->default(0);
            $table->text('instructions')->nullable();
            $table->boolean('admin_mail_sent')->default(false);
            $table->text('admin_mail_error')->nullable();
            $table->boolean('customer_mail_sent')->default(false);
            $table->text('customer_mail_error')->nullable();
            $table->enum('status', ['pending', 'contacted', 'confirmed', 'completed', 'cancelled'])->default('pending');
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bulk_order_leads');
    }
};
