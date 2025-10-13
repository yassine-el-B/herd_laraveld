<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Voeg deze regel toe voor mass assignment
    protected $fillable = ['name'];

    public function jobs()
    {
        return $this->belongsToMany(
            Job::class,
            'job_tag',        // pivot table
            'tag_id',         // foreign key op pivot voor Tag
            'job_listing_id'  // foreign key op pivot voor Job
        );
    }
}
