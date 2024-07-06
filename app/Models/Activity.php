<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'activity_type_id', 'title', 'description', 'start_date', 'end_date', 'hours', 'file', 'certificate', 'status'];

    protected $casts = [
        'file' => 'array',
        'certificate' => 'array',
];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function activityType(){
        return $this->belongsTo(ActivityType::class);
    }
}
