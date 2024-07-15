<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class POE extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'name', 'description', ];

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
}
