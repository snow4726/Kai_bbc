@extends('default')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h2 style="text-align:center"><b>Kaiの掲示板</b></h2>
<h2 style="text-align:center"><small><b>ここは掲示板サイトです</b></small></h2>

@foreach($posts as $post)

	<h2>タイトル：{{ $post->title }}
		<small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
	</h2>
	<p>カテゴリー：{{ $post->category->name }}</p>
	<p>{{ $post->content }}</p>
	<p>{{ link_to("/{$post->id}/kobetu", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
	<p>コメント数：{{ $post->comment_count }}</p>

	<p>{{ link_to("/category/{$post->category->id}", $post->category->name, array('class' => '')) }}</p>

	<p>{{ link_to("/{$post->id}/toukou", '記事を投稿する', array('class' => 'btn btn-primary')) }}</p>

	<hr />
@endforeach

</div>

@stop