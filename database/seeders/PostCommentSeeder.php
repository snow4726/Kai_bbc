<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Kakikomi;
use App\Models\Category;

class PostCommentSeeder extends Seeder{

public function run(){
	// $content = 'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。';

	// $commentdammy = 'コメントダミーです。ダミーコメントだよ。';

/*

	for( $i = 1 ; $i <= 10 ; $i++) {
		$post = new Post;
		$post->title = "$i 番目の投稿";
		$post->content = $content;
		$post->cat_id = 1;
		$post->save();

		$maxComments = mt_rand(3, 15);
		for ($j=0; $j <= $maxComments; $j++) {
			$comment = new Kakikomi;
			$comment->commenter = '名無しさん';
			$comment->comment = $commentdammy;

			// モデル(Post.php)のCommentsメソッドを読み込み、post_idにデータを保存する
			$post->kakikomis()->save($comment);
			$post->increment('comment_count');
		}
	}

*/

	$content = 'Kaiの掲示板へようこそ！';

	$commentdammy = 'ここはKaiの掲示板です';

	for( $i = 1 ; $i <= 1 ; $i++) {
		$post = new Post;
		$post->title = "$i 番目の投稿";
		$post->content = $content;
		$post->cat_id = 17;
		$post->save();

		// $maxComments = mt_rand(3, 15);
		$maxComments = 0;
		for ($j=0; $j <= $maxComments; $j++) {
			$comment = new Kakikomi;
			// $comment = new Comment;
			$comment->commenter = 'Kaiさん';
			$comment->comment = $commentdammy;

			// モデル(Post.php)のCommentsメソッドを読み込み、post_idにデータを保存する
			$post->kakikomis()->save($comment);
			$post->increment('comment_count');
		}
	}

	// カテゴリーを追加する
	$cat1 = new Category;
	$cat1->name = "芸能";
	$cat1->save();

	$cat2 = new Category;
	$cat2->name = "テレビ";
	$cat2->save();

	$cat3 = new Category;
	$cat3->name = "音楽";
	$cat3->save();

	$cat4 = new Category;
	$cat4->name = "映画";
	$cat4->save();

	$cat5 = new Category;
	$cat5->name = "アニメ";
	$cat5->save();

	$cat6 = new Category;
	$cat6->name = "ゲーム";
	$cat6->save();

	$cat7 = new Category;
	$cat7->name = "おもちゃ";
	$cat7->save();

	$cat8 = new Category;
	$cat8->name = "本";
	$cat8->save();

	$cat9 = new Category;
	$cat9->name = "料理";
	$cat9->save();

	$cat10 = new Category;
	$cat10->name = "ショッピング";
	$cat10->save();

	$cat11 = new Category;
	$cat11->name = "法律";
	$cat11->save();

	$cat12 = new Category;
	$cat12->name = "公共施設";
	$cat12->save();

	$cat13 = new Category;
	$cat13->name = "ペット";
	$cat13->save();

	$cat14 = new Category;
	$cat14->name = "ファッション";
	$cat14->save();

	$cat15 = new Category;
	$cat15->name = "健康";
	$cat15->save();

	$cat16 = new Category;
	$cat16->name = "ダイエット、美容";
	$cat16->save();

	$cat17 = new Category;
	$cat17->name = "コンピュータ、IT";
	$cat17->save();

	$cat18 = new Category;
	$cat18->name = "学問";
	$cat18->save();

	$cat19 = new Category;
	$cat19->name = "ニュース";
	$cat19->save();

	$cat20 = new Category;
	$cat20->name = "アウトドア";
	$cat20->save();

	$cat21 = new Category;
	$cat21->name = "旅行";
	$cat21->save();

}
}