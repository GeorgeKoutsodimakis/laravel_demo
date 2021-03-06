<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::enableForeignKeyConstraints();

        Schema::create('events', function (Blueprint $table) {
			$table->increments('id');

			$table->string('name')->unique();

			$table->integer('user_id')
				->unsigned();
			$table->foreign('user_id')
				->references('id')
				->on('users');

			$table->integer('category_id')
				->unsigned();
			$table->foreign('category_id')
				->references('id')
				->on('categories');

			$table->integer('price');
			
			$table->string('country');
			
			$table->string('city');
			
			$table->date('date_from');
			
			$table->date('date_to');
			
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
        Schema::dropIfExists('events');
    }
}
