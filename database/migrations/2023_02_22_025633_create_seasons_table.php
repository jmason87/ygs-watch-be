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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->year('year');
            $table->uuid('team_uuid');
            $table->integer('games_played');
            $table->integer('goals')->nullable();
            $table->integer('assists')->nullable();
            $table->integer('points')->nullable();
            $table->integer('plus_minus')->nullable();
            $table->uuid('player_uuid');
            $table->integer('games_started')->nullable();
            $table->integer('wins')->nullable();
            $table->integer('losses')->nullable();
            $table->integer('overtime_losses')->nullable();
            $table->integer('goals_against')->nullable();
            $table->float('goals_against_average')->nullable();
            $table->decimal('save_percentage')->nullable();
            $table->integer('shutouts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('season');
    }
};
