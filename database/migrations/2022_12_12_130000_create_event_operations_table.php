<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('event_operations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('type_id')->constrained('event_operation_types')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('status_id')->constrained('event_operation_statuses')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->longText('summary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('event_operations');
    }
};
