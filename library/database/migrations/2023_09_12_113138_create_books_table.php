<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32);
            $table->string('title', 150);
<<<<<<< HEAD
            //$table->integer('pieces')->default(50);
=======
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
            $table->timestamps();
        });

        Book::create([
<<<<<<< HEAD
            'author' => "Francz Kafka", 
            'title' => 'Átváltozás', 
            //'pieces' => 10
=======
            'author' => "Franz Kafka", 
            'title' => 'Átváltozás', 
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        ]);

        Book::create([
            'author' => "Asimov", 
            'title' => 'Alapítvány'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
