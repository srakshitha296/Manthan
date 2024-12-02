<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    /** @use HasFactory<\Database\Factories\SpeakersFactory> */
    use HasFactory;

    protected $fillable = [ 'name', 'designation', 'email', 'phone', 'linkedin', 'instagram', 'twitter', 'program_id' ] ;

    public function programs(){
        return $this->hasMany(Program::class);
    }
}
