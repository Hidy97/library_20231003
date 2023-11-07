<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        'start',
        'user_id',
        'copy_id'
=======
        'user_id',
        'copy_id',
        'start'
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
    ];

    protected function setKeysForSaveQuery($query)
    {
        $query
<<<<<<< HEAD
            ->where('start', '=', $this->getAttribute('start'))
            ->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('copy_id', '=', $this->getAttribute('copy_id'));

        return $query;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function userHas()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function userMany()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
=======
            ->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('copy_id', '=', $this->getAttribute('copy_id'))
            ->where('start', '=', $this->getAttribute('start'));
        return $query;
    }

>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
}
