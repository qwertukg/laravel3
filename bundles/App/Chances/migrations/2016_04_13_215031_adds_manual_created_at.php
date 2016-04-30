<?php

use Cook\Laravel\Schema;
class Chances_Adds_Manual_Created_At {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('chances', function($t)
		{
			$t->date('date')->ru('Дата');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('chances', function($t)
		{
			$t->drop_column('date');
		});
	}

}
