<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_listings'; // verwijst naar de juiste tabel
    protected $fillable = ['title', 'salary']; // vulbare velden
}
