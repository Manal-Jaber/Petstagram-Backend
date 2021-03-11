<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplyLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_likes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('liker_id')->unsigned()->index();
            $table->foreign('liker_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->bigInteger('reply_id')->unsigned()->index();
            $table->foreign('reply_id')->references('id')->on('replies')->onDelete('cascade');
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
        Schema::dropIfExists('reply_likes');
    }
}
