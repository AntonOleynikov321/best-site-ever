<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $forum) {
    $forum->increments('id');
    $forum->unsignedInteger('user_id');
    $forum->unsignedInteger('group_id');
    $forum->string('title');
    $forum->text('description');
    $forum->timestamps();
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
