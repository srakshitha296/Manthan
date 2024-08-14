<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'type', 'start_date', 'end_date', 'duration', 'fees', 'location', 'organiser'];

}
