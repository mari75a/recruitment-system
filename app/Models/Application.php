<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id',
        'status',
    ];

    // Relationship: each application belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: each application belongs to a job
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
