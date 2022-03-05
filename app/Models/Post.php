<?php

namespace App\Models;

use Eloquent;
use App\Models\Kakikomi;
use App\Models\Category;

class Post extends Eloquent{

	public function Kakikomis(){
		// “Še‚Í‚½‚­‚³‚ñ‚ÌƒRƒƒ“ƒg‚ðŽ‚Â
		return $this->hasMany('Kakikomi', 'post_id');
	}

	public function Category(){
		// “Še‚Í1‚Â‚ÌƒJƒeƒSƒŠ[‚É‘®‚·‚é
		return $this->belongsTo('Category','cat_id');
	}

}