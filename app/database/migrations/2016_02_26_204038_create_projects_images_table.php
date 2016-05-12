<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects_images',function($table){
			$table->increments('id');		
			$table->integer('projects_Id')->unsigned();
			$table->integer('images_id')->unsigned();						
			$table->timestamps();
						
		});
		Schema::table('projects_images', function($table) {
       	$table->foreign('projects_Id')->references('id')->on('projects');
       	$table->foreign('images_id')->references('id')->on('images');

  		 });
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects_images');
	}

}
