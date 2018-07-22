@extends('main')
HELLO
@section('content')
	<div class="container" style="color:black;">
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->body }}</p>
		@foreach($photos as $photo)
				<img src="/{{ $photo->photo_path }}" alt="">
		@endforeach

		@foreach($tags as $tag)
			{{ $tag->tag_name }}
		@endforeach
	</div>
@endsection
