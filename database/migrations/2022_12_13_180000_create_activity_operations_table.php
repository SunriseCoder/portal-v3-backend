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
        Schema::create('activity_operations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')->constrained('activities')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('type_id')->constrained('activity_operation_types')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('language_id')->nullable()->constrained('activity_operation_languages')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('status_id')->constrained('activity_operation_statuses')
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
        Schema::dropIfExists('activity_operations');
    }
};
