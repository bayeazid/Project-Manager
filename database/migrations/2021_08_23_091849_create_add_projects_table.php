<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name'); //->nullable();
            $table->string('project_catagory');            
            $table->string('project_description');
            $table->string('project_status');
            // $table->string('project_tasks');
            // $table->string('project_users');
            // $table->string('project_resources');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_projects');
    }
}
