<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::create('cast_movies', function (Blueprint $table) {
      $table->foreignUuid('movie_id')->constrained()->cascadeOnDelete();
      $table->foreignUuid('cast_id')->constrained()->cascadeOnDelete();
      $table->primary(['movie_id', 'cast_id']);
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('cast_movies');
  }
};
