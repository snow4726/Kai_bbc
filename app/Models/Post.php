<?php

namespace App\Models;

use Eloquent;
use App\Models\Kakikomi;
use App\Models\Category;

class Post extends Eloquent{

	public function Kakikomis(){
		// ���e�͂�������̃R�����g������
		return $this->hasMany('Kakikomi', 'post_id');
	}

	public function Category(){
		// ���e��1�̃J�e�S���[�ɑ�����
		return $this->belongsTo('Category','cat_id');
	}

}