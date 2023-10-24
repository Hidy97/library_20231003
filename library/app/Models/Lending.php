<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    use HasFactory;

    protected $fillable = [
        'start',
        'user_id',
        'copy_id'
    ];

    protected function setKeysForSaveQuery($query)
    {
        $query
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
}
