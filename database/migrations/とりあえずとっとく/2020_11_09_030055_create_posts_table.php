<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
		$table->increments('id');
       		$table->string('title');
		$table->string('cat_id'); // �|�X�g�e�[�u���ƃJ�e�S���[�e�[�u���̕R�t���ɗ��p���܂�
		$table->text('content');
		$table->unsignedInteger('comment_count'); // ���e�ɉ����̃R�����g�������̂����J�E���g���܂�
		$table->timestamps();

		// $table->id();
		//$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
