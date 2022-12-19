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
        Schema::create('activity_operation_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained('activity_operation_type_groups')
                ->restrictOnDelete()->cascadeOnUpdate();
            $table->string('code')->unique();
            $table->tinyText('name');
            $table->integer('position')->unique();
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
        Schema::dropIfExists('activity_operation_types');
    }
};
