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
        Schema::create('strony', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default(0);
            $table->integer('kolejnosc')->default(0);
            $table->string('tytul');
            $table->longText('zawartosc');
            $table->string('url')->unique();
            $table->string('jezyk')->default('pl');
            $table->boolean('opublikowana')->default(false);
            $table->boolean('aktywny')->default(true);
            $table->boolean('domenu')->default(false);
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('uzytkownik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
