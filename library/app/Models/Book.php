<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected  $primaryKey = 'book_id';

    protected $fillable = [
        'author',
        'title',
<<<<<<< HEAD
        //'pieces',
=======
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
    ];

    public function copy()    
    {
        //kapcsolat, osztály,  ott hogy hívják, itt hogy hívják
        return $this->hasMany(Copy::class, 'book_id', 'book_id');
    }
}
