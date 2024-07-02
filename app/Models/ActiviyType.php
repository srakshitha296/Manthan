<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiviyType extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'credits'];

    public function activities(){
        return $this->hasMany(Activity::class);
    }

}
