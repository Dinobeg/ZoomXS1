<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskCategory extends Model{

	protected $table = 'task_categories';
	protected $fillable = ['name'];
	
}