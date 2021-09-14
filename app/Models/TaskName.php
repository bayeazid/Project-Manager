<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskName extends Model
{
    use HasFactory;
    protected $table="task_names";
    protected $guarded=[];
}
