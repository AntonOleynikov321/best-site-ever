<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitesStudentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
	Schema::create('invites_students', function (Blueprint $table) {
	    $table->increments('id');
	    $table->integer('user_id')->unsigned();
	    $table->integer('group_id')->unsigned();
	    $table->timestamps();
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
	Schema::drop('invites_students');
    }

}
