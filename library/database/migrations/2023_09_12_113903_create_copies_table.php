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
<<<<<<< HEAD
            //0: puha, 1: keménykötésű
            $table->boolean('hardcover')->default(0);
            //0: a könyvt-ban van, 1: felhasználónál, 2: selejtes
=======
            //0: puha, 1: kemény kötésű
            $table->boolean('hardcovered')->default(0);
            //0: könyvt-ban van, 1: f-nál, 2: selejtes
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
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
<<<<<<< HEAD
            'publication' => 1987, 
=======
            'publication' => 2021, 
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
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
