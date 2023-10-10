<?php

use App\Models\Copy;
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
        Schema::create('copies', function (Blueprint $table) {
            $table->id('copy_id');
            //0: puha, 1: keménykötésű
            $table->boolean('hardcover')->default(0);
            //0: a könyvt-ban van, 1: felhasználónál, 2: selejtes
            $table->integer('status')->default(0);
            $table->year('publication');
            $table->foreignId('book_id')->references('book_id')->on('books');
            $table->timestamps();
        });

        Copy::create([
            'publication' => 2001, 
            'book_id' => 2
        ]);

        Copy::create([
            'publication' => 1987, 
            'book_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
