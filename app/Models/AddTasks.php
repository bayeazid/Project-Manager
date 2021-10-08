<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTasks extends Model
{
    use HasFactory;
    protected $table="add_tasks";
    protected $guarded=[];

    public function task(){
        return $this->belongsTo(create_project::class,'project_id','id');
    }
    // public function projectname(){
    //     //f=p AddTasks-create_project
    //     return $this->belongsTo(create_project::class,'project_name','id');
    // }

}
