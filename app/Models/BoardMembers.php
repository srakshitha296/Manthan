<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardMembers extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'board_id'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function board()
    {
        return $this->hasMany(Board::class);
    }
}
