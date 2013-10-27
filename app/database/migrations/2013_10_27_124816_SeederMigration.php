<?php

use Illuminate\Database\Migrations\Migration;

class SeederMigration extends Migration {

    /**
     * Run the migrations.
     * We put seeder as a migration to ensure that it gets ran just once
     *
     * @return void
     */
    public function up()
    {
        $seeder = new DatabaseSeeder();
        $seeder->run();
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }

}