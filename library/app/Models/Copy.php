<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    protected  $primaryKey = 'copy_id';

    protected $fillable = [
<<<<<<< HEAD
        'hardcover',
        'status',
        'publication',
        'book_id',
=======
        'hardcovered',
        'status',
        'publication',
        'book_id'
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
    ];

    public function book()    
    {
        return $this->belongsTo(Book::class, 'book_id', 'book_id');
    }

    public function lending()    
    {
        return $this->hasMany(Lending::class, 'copy_id', 'copy_id');
    }
}
