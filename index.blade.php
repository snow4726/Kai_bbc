@extends('default')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

@foreach($posts as $post)

	<h2>�^�C�g���F{{ $post->title }}
		<small>���e���F{{ date("Y�N m�� d��",strtotime($post->created_at)) }}</small>
	</h2>
	<p>�J�e�S���[�F{{ $post->category->name }}</p>
	<p>{{ $post->content }}</p>
	<p>{{ link_to("/bbc/{$post->id}", '������ǂ�', array('class' => 'btn btn-primary')) }}</p>
	<p>�R�����g���F{{ $post->comment_count }}</p>
	<hr />
@endforeach

</div>

@stop