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
    Schema::rename("saludo", "tasks");

    Schema::table('tasks', function (Blueprint $table) {
      $table->renameColumn('saludo', 'title');
      $table->string('description');
      $table->boolean('status')->default(true);
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::rename("tasks", "saludo");
    Schema::table(
      'saludo',
      function (Blueprint $table) {
        $table->renameColumn('title', 'saludo');
        $table->dropColumn('description');
        $table->dropColumn('status');
      }
    );
  }
};
