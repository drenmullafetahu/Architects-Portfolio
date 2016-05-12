<?php

class Images extends Eloquent {	

	protected $table = 'images';	
	protected $fillable =['title','filename'];

	public function projects(){
		return $this->belongsToMany('Project','projects_images');
	}

}
