<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTasks extends Model
{
    use HasFactory;
    protected $table="add_tasks";
    protected $guarded=[];
}