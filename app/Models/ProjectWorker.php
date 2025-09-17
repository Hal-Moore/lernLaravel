<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectWorker extends Model
{
    use HasFactory;
    protected $table='project_workers';
    protected $guarded=false;
}
