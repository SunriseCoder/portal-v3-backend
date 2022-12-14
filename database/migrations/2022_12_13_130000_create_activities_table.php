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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('activity_types')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('event_id')->constrained('events')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->date('date');
            $table->tinyText('name');
            $table->longText('summary')->nullable();
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
        Schema::dropIfExists('activities');
    }
};
