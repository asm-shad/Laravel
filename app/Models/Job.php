<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Arr;
class Job extends Model {
    protected $table = "job_listings";

    protected $fillable = ['title', 'salary'];
}






