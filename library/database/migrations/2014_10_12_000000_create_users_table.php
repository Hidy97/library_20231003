<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //auto-increment, primary key, id a neve, bigint típusú
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //0: könyvtáros, 1: felhasználó
            $table->boolean('permission')->default(1);
            $table->rememberToken();
            $table->timestamps();

            //$table->string('password');
        });

        User::create([
            'name' => "Könyvtáros", 
            'email' => 'konyvtaros@gmail.com', 
<<<<<<< HEAD
            'password' => Hash::make('aa123'), //($request->password)//'aa123'
            'permission => 0'
=======
            'password' => Hash::make('Aa123@'),
            'permission' => 0
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        ]);

        User::create([
            'name' => "Gizi", 
            'email' => 'gizi@gmail.com', 
<<<<<<< HEAD
            'password' => Hash::make('gizi123') 
=======
            'password' => Hash::make('aa123')
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
