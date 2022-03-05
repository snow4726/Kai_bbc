@extends('default')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h1>投稿ページ</h1>

{{-- 投稿完了時にフラッシュメッセージを表示 --}}
@if(Session::has('message'))
	<div class="bg-info">
		<p>{{ Session::get('message') }}</p>
	</div>
@endif

{{-- エラーメッセージの表示 --}}
@foreach($errors->all() as $message)
	<p class="bg-danger">{{ $message }}</p>
@endforeach

{{ Form::open(['route' => 'store'], array('class' => 'form')) }}

	<div class="form-group">
		<label for="title" class="">タイトル</label>
		<div class="">
			{{ Form::text('title', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<label for="cat_id" class="">カテゴリー</label>
		<div class="">
			<select name="cat_id" type="text" class="">
				<option></option>
				<option value="1" name="1">芸能</option>
				<option value="2" name="2">テレビ</option>
				<option value="3" name="3">音楽</option>
				<option value="4" name="4">映画</option>
				<option value="5" name="5">アニメ</option>
				<option value="6" name="6">ゲーム</option>
				<option value="7" name="7">おもちゃ</option>
				<option value="8" name="8">本</option>
				<option value="9" name="9">料理</option>
				<option value="10" name="10">ショッピング</option>
				<option value="11" name="11">法律</option>
				<option value="12" name="12">公共施設</option>
				<option value="13" name="13">ペット</option>
				<option value="14" name="14">ファッション</option>
				<option value="15" name="15">健康</option>
				<option value="16" name="16">ダイエット、美容</option>
				<option value="17" name="17">コンピュータ、IT</option>
				<option value="18" name="18">学問</option>
				<option value="19" name="19">ニュース</option>
				<option value="20" name="20">アウトドア</option>
				<option value="21" name="21">旅行</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="content" class="">本文</label>
		<div class="">
			{{ Form::textarea('content', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">投稿する</button>
	</div>

	{{ Form::hidden('post_id', optional($post)->id) }}

{{ Form::close() }}

</div>

@stop