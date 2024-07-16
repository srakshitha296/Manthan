<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'activity_type_id', 'title', 'description', 'p_o_e_s_id', 'start_date', 'end_date', 'hours', 'file', 'certificate', 'status'];

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

    public function poe(){
        return $this->belongsTo(ProgramExpectedOutcomes::class);
    }
}