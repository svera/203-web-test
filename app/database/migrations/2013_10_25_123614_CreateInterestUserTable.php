<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interest_user', function($table)
        {
            $table
                ->integer("interest_id")
                ->nullable(false)
                ->unsigned();
            $table
                ->integer("user_id")
                ->nullable(false)
                ->unsigned();
        });
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interest_user', function(Blueprint $table)
        {
            Schema::dropIfExists('interest_user');
        });
    }

}