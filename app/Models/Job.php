<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'description',
        'location',
    ];

    // Relationship: a job can have many applications
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
