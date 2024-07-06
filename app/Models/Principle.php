<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principle extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'college_id', 'qualification', 'experience', 'specialization','joining_date'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function college(){
        return $this->belongsTo(College::class);
    }

}
