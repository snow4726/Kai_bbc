<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kakikomis', function (Blueprint $table) {
        // Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('post_id'); // ポストテーブルとコメントテーブルの紐付けに利用します
			$table->string('commenter');
			$table->text('comment');
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
        Schema::dropIfExists('comments');
    }
}
