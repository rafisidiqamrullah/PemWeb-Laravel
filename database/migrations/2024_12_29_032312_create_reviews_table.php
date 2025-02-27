<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::create('reviews', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->text('review');
      $table->integer('rating');
      $table->foreignUuid('user_id')
        ->constrained()
        ->cascadeOnDelete()->cascadeOnDelete();
      $table->foreignUuid('movie_id')
        ->constrained()
        ->cascadeOnDelete()->cascadeOnDelete();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('reviews');
  }
};
