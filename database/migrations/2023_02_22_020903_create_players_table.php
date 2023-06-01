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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->string('position');
            $table->string('height');
            $table->string('weight');
            $table->uuid('card_team_uuid');
            $table->date('birthdate');
            $table->integer('age');
            $table->year('year_drafted')->nullable();
            $table->integer('round')->nullable();
            $table->integer('round_pick')->nullable();
            $table->integer('overall_pick')->nullable();
            $table->uuid('set_uuid');
            $table->uuid('draft_team_uuid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player');
    }
};
