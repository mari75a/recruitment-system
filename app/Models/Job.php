<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'department_id',
        'requirements',
        'deadline',
    ];

    // Make 'deadline' a Carbon instance
    protected $dates = [
        'deadline',
    ];

    // Relationship to department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Relationship to applications
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
