@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Title:',  ['class' => 'create-button-margin']) }}
			{{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

			{{ Form::label('slug', 'URL Slug:',  ['class' => 'create-button-margin']) }}
			{{ Form::text('slug', null, ['class' => 'form-control input-lg']) }}

			{{ Form::label('body', 'Body:',  ['class' => 'create-button-margin']) }}
			{{ Form::textarea('body', null,  ['class' => 'form-control input-lg']) }}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
				  <label>URL Slug:</label>
				  <p><a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a></p>
				</dl>
				<dl class="dl-horizontal">
				  <label>Created at:</label>
				  <p>{{ $post->created_at->diffForHumans() }}</p>
				</dl>

				<dl class="dl-horizontal">
				  <label>Last Update:</label>
				  <p>{{ $post->created_at->diffForHumans() }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{{ Html::linkRoute('posts.show', 'Cancel', array( $post->id ), array('class' => 'btn btn-danger btn-block'))}}						
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'] ) }}
					</div>
				</div>
				
			</div>
		</div>
		{!! Form::close() !!}
	</div><!-- End of row -->

@stop