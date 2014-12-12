<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeIngredients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipe_ingredients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('recipe_id');
			$table->integer('ingredient_id');
			$table->integer('amount');
			$table->string('unit',20);
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
		Schema::drop('recipe_ingredients');
	}

}
