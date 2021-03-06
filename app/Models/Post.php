<?php

namespace App\Models;

use Eloquent;
use App\Models\Kakikomi;
use App\Models\Category;

class Post extends Eloquent{

	public function Kakikomis(){
		// 投稿はたくさんのコメントを持つ
		return $this->hasMany('Kakikomi', 'post_id');
	}

	public function Category(){
		// 投稿は1つのカテゴリーに属する
		return $this->belongsTo('Category','cat_id');
	}

}