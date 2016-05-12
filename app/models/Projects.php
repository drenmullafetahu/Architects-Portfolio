<?php

class Projects extends Eloquent {	

	protected $table = 'projects';	
	protected $fillable =['name','description','slug','thumbnail_img','category'];

	public function images(){
		return $this->belongsToMany('Images','projects_images');
	}

}
