<?php

class Categories extends Eloquent {	

	protected $table = 'categories';	
	protected $fillable =['name','description','slug','thumbnail_image'];

}
