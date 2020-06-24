<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('image');
            $table->string('tweet_num')->unique();
            $table->string('user_num')->unique();
            $table->integer('favorite_count');
            $table->integer('reply_count');
            $table->integer('reply_flg');
            $table->string('reply_to');
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
        Schema::dropIfExists('tweets');
    }
}
