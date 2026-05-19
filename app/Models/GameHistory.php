<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameHistory extends Model
{
    protected $fillable = ['user_id', 'winner_role', 'word'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
